<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

class ShowPosts extends Component
{
    
    #[Title("All Posts")]

    public function delete(Post $post)
    {
        $post->delete();
    }
    public function render()
    {

        return view('livewire.show-posts', [
            'posts'=> Post::all(),
        ]);
    }
}
