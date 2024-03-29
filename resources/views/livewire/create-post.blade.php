<div>
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-indigo-600"> Create new Product:</p>

            <span x-text="$wire.name"></span>
            <p class="mt-6 text-base leading-7 text-gray-600">Enjoy Livewire with validation</p>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form wire:submit.prevent="submit" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name {{ $name }}</label>
                    <input wire:model="name" type="text" id="name" name="name" placeholder="Product Name"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                  @error('name') border-red-500 @enderror">
                    <p class="text-xs text-gray-500 font-semibold"><b>URL:
                        </b>https://afrovending.com/product/{{ $slug }}</p>
                    @error('name')
                        <em class="text-red-500">{{ $message }}</em>
                    @enderror
                </div>


                <!-- Slug -->
                <div hidden class="mb-4">
                    <label for="slug" class="block text-gray-700 font-bold mb-2">Slug</label>
                    <input wire:model="slug" type="text" disabled value="{{ $slug }}"
                        placeholder="Product Slug"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
                    <select wire:model.defer="category" placeholder="Product Category"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($categories as $cat)
                            <option value="{{ $cat }}">{{ $cat }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <em class="text-red-500">{{ $message }}</em>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea wire:model.live="description" placeholder="Product Description"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    <small>Character:
                        <span x-text="$wire.description.length"></span>/100
                    </small>
                    <small>Word:
                        <span x-text="$wire.description.split(' ').length -1"></span>
                    </small>
                </div>
                @error('description')
                    <em class="text-red-500">{{ $message }}</em>
                @enderror

                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">$</span>
                        <input wire:model.live="price" x-mask:dynamic="$money($input)" type="text"
                            placeholder="Product Price"
                            class="pl-8 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    @error('price')
                        <em class="text-red-500">{{ $message }}</em>
                    @enderror
                </div>



                <!-- Quantity -->
                <div class="mb-4">
                    <label for="quantity" class="block text-gray-700 font-bold mb-2">Quantity</label>
                    <input wire:model.defer="quantity" type="tel" id="quantity" name="quantity"
                        placeholder="Product Quantity"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <!-- Width -->
                <div class="mb-4">
                    <label for="width" class="block text-gray-700 font-bold mb-2">Width</label>
                    <input wire:model.defer="width" type="tel" id="width" name="width"
                        placeholder="Product Width"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <!-- Height -->
                <div class="mb-4">
                    <label for="height" class="block text-gray-700 font-bold mb-2">Height</label>
                    <input wire:model.defer="height" type="tel" id="height" name="height"
                        placeholder="Product Height"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <!-- Weight -->
                <div class="mb-4">
                    <label for="weight" class="block text-gray-700 font-bold mb-2">Weight</label>
                    <input wire:model.defer="weight" type="tel" id="weight" name="weight"
                        placeholder="Product Weight"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <!-- Photos -->
                <div class="mb-4 flex flex-wrap gap-3">
                    @if ($photos)
                        @foreach ($photos as $photo)
                            <div class="w-1/4">
                                <img src="{{ $photo->temporaryUrl() }}" class="rounded-xl w-full h-auto mb-2"
                                    alt="Preview">
                            </div>
                        @endforeach
                    @endif
                </div>

                <input type="file" wire:model="photos" multiple
                    class="block w-full h-12 px-4 py-3 bg-gray-100 border-0 border-b border-transparent rounded-md focus:border-green-500 focus:ring-0 sm:text-md">


                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                </div>
            </form>
    </main>

</div>
