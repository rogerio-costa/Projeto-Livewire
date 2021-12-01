<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly';
    public $loud = false;
    public $greeting = 'Hello'; 
    public $frase = 'With supporting text below as a natural lead-in to additional content.';
    public $nameList = ['Kal', 'Bruce', 'Diana'];

    protected $listeners = ['refreshChildren' => '$refresh', 'foo' => '$refresh'];

    // Inicializador
    public function mount($myName)
    {
        $this->name = $myName;
    }

    // Roda no início de uma requisição feita por um componente
    public function hydrate()
    {
        $this->frase = 'Nunca desanime com a derrota de hoje, amanhã terá outra.';
    }

    // Roda sempre que atualiza uma propriedade pública, como uma variável pública
    public function updated(){
        $this->frase = 'Nunca subestime sua incapacidade';
    }

    public function resetName($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world', [
            
        ]);
    }
}
