<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Counter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CounterTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Counter::class)
            ->assertStatus(200);
    }
}
