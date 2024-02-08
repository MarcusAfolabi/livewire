<tr>
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
        {{ str($post->title)->words(3) }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $post->content }}</td>
    <td>
        <button 
        type="button" 
        wire:click="$parent.delete({{ $post->id }})" 
            {{-- wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE" --}}

        wire:confirm="Are you sure you want to delete this post?" 
        class="bg-red-500 rounded-lg px-2 py-2 text-white">
        Delete
        </button>
          
    </td>
</tr>