<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Insertion;

class InsertionEditForm extends Component
{

    public $name;
    public $subtitle;
    public $description;
    public $price;
    public $category_id;
    public $insertion;
    public $rules=[
        'name' =>'required',
       'subtitle' =>'required',
        'description' =>'required',
        'price' =>'required',
        'category_id' =>'required',
    ];
    public function update()
    {
        $this->validate();
        $this->insertion->update([
            'name'=>$this->name,
            'subtitle'=>$this->subtitle,
            'description'=>$this->description,
            'category_id' => $this->category_id,
            'price'=>$this->price,
        ]);
        session()->flash('insertionUpdated', __('ui.insertionEdited'));
        $this->reset();
    }
    public function mount()
    {
        $this->name = $this->insertion->name;
        $this->subtitle = $this->insertion->subtitle;
        $this->description = $this->insertion->description;
        $this->price = $this->insertion->price;
        $this->category_id = $this->insertion->category;
    }
    public function render()
    {
        /* $insertions = Insertion::all(); */
        return view('livewire.insertion-edit-form'/* , compact('insertions') */);
    }
}
