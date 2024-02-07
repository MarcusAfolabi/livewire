
<div>
  <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <p class="text-base font-semibold text-indigo-600"> Live Update of Posts</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Posts</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">Enjoy Livewire with validation</p>
      <form wire:submit.prevent="save">
        <div class="grid grid-cols-1 md:px-28 gap-x-8 gap-y-6 sm:grid-cols-2 mt-6">
          <div class="sm:col-span-2">
            <label class="block text-xs font-normal text-black sm:text-sm sm:font-semibold">Title</label>
            <div class="mt-2">
              <input type="tel" name="title" wire:model="title" class="block w-full h-12 px-4 py-3 bg-gray-100 border-0 border-b border-transparent rounded-md focus:border-green-500 focus:ring-0 sm:text-md" placeholder="enter title">
            </div>
            @error('title') <em class="text-red-500">{{ $message }}</em>@enderror
          </div>
          <div class="sm:col-span-2">
            <label class="block text-xs font-normal text-black sm:text-sm sm:font-semibold">Content</label>
            <div class="mt-2">
              <textarea type="tel" name="title" wire:model="content" class="block w-full h-12 px-4 py-3 bg-gray-100 border-0 border-b border-transparent rounded-md focus:border-green-500 focus:ring-0 sm:text-md" placeholder="enter content"></textarea>
            </div>
            <small>Character:
              <span x-text="$wire.content.length"></span>
            </small>
            <small>Word:
              <span x-text="$wire.content.split(' ').length -1"></span>
            </small>
          </div>
          @error('content') <em class="text-red-500">{{ $message }}</em>@enderror
          <button type="button" x-on:click="$wire.save()" class="bg-green-500 text-white px-3 py-3 rounded-lg mt-7 justify-between">Save</button>
          <div wire:loading>
            Saving data
          </div>
        </div> 
      </form> 
  </main>
 
</div>