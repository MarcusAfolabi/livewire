<div>
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-indigo-600"> Todos </p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl"></h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Enjoy the power of livewire</p>
            <div class="justify-center text-center">

                <form wire:submit.prevent="add">
                    <div class="grid grid-cols-1 md:px-28 gap-x-8 gap-y-6 sm:grid-cols-2 mt-6">
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-normal text-black sm:text-sm sm:font-semibold">Your todo is {{ $todo}}</label>
                            <div class="mt-2">
                                <input type="text" name="title" wire:model.change="todo" class="block w-full h-12 px-4 py-3 bg-gray-100 border-0 border-b border-transparent rounded-md focus:border-green-500 focus:ring-0 sm:text-md" placeholder="enter todo">
                            </div>
                        </div>
                        <button type="submit" class="bg-green-500 rounded-md px-2 py-2 text-white">Save</button>
                    </div>

                </form>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <ul>
                        @foreach ($todos as $todo)
                        <li>{{ $todo }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
    </main>
</div>