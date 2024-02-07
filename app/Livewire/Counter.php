<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Counter extends Component
{
    public $count = 1;
    #[Title("Counter")]

    public function increasement()
    {
        $this->count++;
    }
    public function descreasement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
