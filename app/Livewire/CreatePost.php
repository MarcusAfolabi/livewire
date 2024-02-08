<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class CreatePost extends Component
{
    use WithFileUploads;
    public $product;
    
    #[Title("Create Post")]

    
    #[Rule('required', message: 'Yo, add a title')]

    #[Rule('required', message: 'Yo, add a product')]
    #[Validate('image|max:1024')] // 1MB Max
    public $photos;

    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:10', message: 'Yo, that too short')]
    #[Rule('max:50', message: 'Yo, that too long for a product name. make it concise')]
    public $name;

    #[Rule('required', message: 'Yo, add a content')]
    #[Rule('max:100', message: 'Yo, that too long')]

    public $description = '';
    #[Rule('required', message: 'Yo, add a description')]

    public $slug;
    #[Rule('required', message: 'Yo, add a slug')]

    public $category = '';
    #[Rule('required', message: 'Yo, add a category')]

    public $price = '';
    #[Rule('required', message: 'Yo, add a price')]

    public $quantity = '';
    #[Rule('required', message: 'Yo, add a quantity')]

    public $width = '';
    #[Rule('required', message: 'Yo, add a width')]

    public $height = '';
    #[Rule('required', message: 'Yo, add a height')]

    #[Rule('required', message: 'Yo, add a content')]
    #[Rule('max:100', message: 'Yo, that too long')]
    public $content = '';

    public $receiveUpdates = false;

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }
    public function submit()
    {
       
        $this->validate();
        Post::create([
            'name' => $this->name,
            'content' => $this->content
        ]);
        session()->flash('status', 'Post successfully updated.');

        $this->redirect('/show-posts', navigate: true);
        // $this->reset();
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
