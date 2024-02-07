<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Todos extends Component
{
    #[Title("All Todos")]

    public $todo = '';

    public $todos = [
        'Wash your face',
        'jump up'
    ];

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
