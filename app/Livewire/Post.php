<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class Post extends Component
{
    #[Title("Create Post")]
    #[Rule('required', message: 'Yo, add a title')]
    public $title = '';

    #[Rule('required', message: 'Yo, add a content')]
    public $content = '';


    public function save()
    {
        $this->validate();

         Post::store([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
