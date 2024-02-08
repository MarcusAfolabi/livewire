<?php

namespace App\Livewire;

use App\Models\State;
use Livewire\Component;

class City extends Component
{
    public $name = '';
    public $state = [];

    public function add()
    {
        State::create([
            'name' => $this->name,
        ]);

        session()->flash('status', 'State successfully added.');
        $this->reset();
    }

   
}
