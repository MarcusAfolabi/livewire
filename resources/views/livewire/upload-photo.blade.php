<div>
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-indigo-600"> Photo </p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl"></h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Upload and preview photo</p>
            <div class="justify-center text-center">
                <form wire:submit="save">
                    @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" class="rounded-xl w-10 h-10">
                    @endif
                    <input type="file" wire:model="photo"
                        class="block w-full h-12 px-4 py-3 bg-gray-100 border-0 border-b border-transparent rounded-md focus:border-green-500 focus:ring-0 sm:text-md">

                    @error('photo')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <button type="submit">Save photo</button>
                </form>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <ul>

                    </ul>
                </div>
            </div>
    </main>
</div>
