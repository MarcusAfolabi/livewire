@extends('layouts.main')
@section('title', 'Products')   
@section('content')
<div class="flex justify-center items-center ">
    <p class="text-green-500 font-semibold mt-10">Product list</p>
</div>

<livewire:add-product>

@endsection