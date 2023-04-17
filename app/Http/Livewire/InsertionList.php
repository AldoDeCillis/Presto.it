<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Insertion;

class InsertionList extends Component
{
    public $insertions;

    protected $listeners = ['insertionDestroyed' => 'refreshList'];

    public function destroy(Insertion $insertion){
        $insertion->delete();
        session()->flash('message', __('ui.insertionDestroyed'));
        $this->emit('insertionDestroyed');
    }
    public function refreshList()
    {
        $this->insertions = Insertion::all();
    }
    public function render()
    {
        $insertions = Insertion::all();
        return view('livewire.insertion-list', compact('insertions'));
    }
}
