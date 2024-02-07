<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class CreatePost extends Component
{
    #[Title("Create Post")]

    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:10', message: 'Yo, that too short')]
    public $title = '';

    #[Rule('required', message: 'Yo, add a content')]
    public $content = '';


    public function saver()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        $this->redirect('/show-posts', navigate: true);
        // $this->reset();
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
