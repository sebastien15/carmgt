<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Type;

class ShowType extends Component
{
    public $types;
    public function mount()
    {
        $types = Type::all();
    }
    public function render()
    {
        return view('livewire.show-type');
    }
}
