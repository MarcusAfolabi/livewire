<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;

class AddProduct extends Component
{
    use WithFileUploads;
    public $product;

    
    #[Title("Create Product")]
    
    #[Rule('required', message: 'Yo, add a product')]
    #[Validate('image|max:1024')] // 1MB Max
    public $photos;

    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:10', message: 'Yo, that too short')]
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

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }
 
    
    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.add-product');
    }
}
