<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    public $name;

    protected $listeners = ['refreshChildren' => '$refresh', 'foo' => '$refresh'];


    public function mount($myName)
    {
        $this->name = $myName;
    }

    public function emitFoo()
    {
        $this->emitUp('foo');
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
