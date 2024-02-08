     <div>
        <form wire:submit.prevent="add">
            <div class="grid grid-cols-1 md:px-28 gap-x-8 gap-y-6 sm:grid-cols-2 mt-6">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-normal text-black sm:text-sm sm:font-semibold">Your state is {{ $name}}</label>
                    <div class="mt-2">
                        <input type="text" wire:model="name" class="block w-full h-12 px-4 py-3 bg-gray-100 border-0 border-b border-transparent rounded-md focus:border-green-500 focus:ring-0 sm:text-md" placeholder="Enter State">
                    </div>
                </div>
                <button type="submit" class="bg-green-500 rounded-md px-2 py-2 text-white">Add</button>
            </div>

        </form>
        <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="text-center">
                <p class="text-base font-semibold text-indigo-600">All State</p>
                <div class="justify-center text-center">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">State</th>
                                <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th> -->
                                <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th> -->
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($state)
                            @foreach ($state as $sta)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $sta->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                     ...
                                </td>
                                <td> 
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div> 