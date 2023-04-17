<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Insertion;
use App\Jobs\AddWatermark;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class InsertionCreateForm extends Component
{
    use WithFileUploads;

    public $name;
    public $subtitle;
    public $price;
    public $description;
    public $temporary_images = [];
    public $images = [];
    public $category;
    public $is_new;
    public $insertion;

    protected $rules = [
        'is_new'=>'required',
        'name' => 'required|max:16',
        'subtitle' => 'required|max:26',
        'price' => 'required',
        'description' => 'required',
        'category' => 'required',
        'images.*' => 'image|max:1024', // 1MB Max
        'temporary_images.*' => 'image|max:1024', // 1MB Max
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function removeImages($key)
    {

        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();

        $category = Category::find($this->category);

        $this->insertion = Insertion::create([

            'name' => $this->name,
            'subtitle' => $this->subtitle,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::user()->id,
            'category_id' => $category->id,
            'is_new'=> $this->is_new
        ]);
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $newFileName = "insertions/{$this->insertion->id}";
                $newImage = $this->insertion->images()->create([
                    'path' => $image->store($newFileName, 'public')
                ]);
           
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path , 500, 500),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
        }
            File::deleteDirectory(storage_path('/app/livewire-tmp/'));
        }

        session()->flash('insertionCreated', __('ui.insertionCreated'));

        /* return redirect(route('homepage'))->with('insertionCreated', 'Hai inserito correttamente un annuncio.'); */
        $this->cleanform();
    }

    public function cleanForm()
    {
        $this->name = "";
        $this->subtitle = "";
        $this->price = "";
        $this->description = "";
        $this->is_new = "";
        $this->images = [];
        $this->temporary_images = [];
        //$this->form_id = rand();
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.insertion-create-form', compact('categories'));
    }
}
