<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class Post extends Component
{
    #[Title("Welcome to Livewire")] 

 
    public function placeholder(array $params = [])
{
    return view('livewire.placeholders.skeleton', $params);
}

    public function render()
    {
        return view('livewire.post');
    }
}
