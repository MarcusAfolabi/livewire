<div>
 
  <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <p class="text-base font-semibold text-indigo-600"> Button Counter</p>
    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">{{ $count }}</h1>
    <p class="mt-6 text-base leading-7 text-gray-600">Enjoy the power of livewire</p>
    <div class="justify-center text-center">
 
    <div class="mt-10 flex items-center justify-center gap-x-6">
     <button wire:click="increasement"  class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> + Add</button>
     <button wire:click="descreasement" class="text-sm font-semibold text-gray-900"> - Minus </button>
    </div>
  </div>
</main>
</div>