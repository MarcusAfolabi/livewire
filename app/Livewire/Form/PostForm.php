<?php
 
namespace App\Livewire\Forms;
 
use Livewire\Attributes\Validate;
use Livewire\Form;
 
class PostForm extends Form
{
    #[Validate('required|min:3')]
    public $title = '';
 
    #[Validate('required|min:3|max:100')]
    public $content = '';
}