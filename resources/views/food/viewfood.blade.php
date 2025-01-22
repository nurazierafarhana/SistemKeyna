<x-app-layout>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Price</th>
                <th class="px-4 py-2 border">Type</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
            <tr>
                <td class="px-4 py-2 border">{{ $food->name }}</td>
                <td class="px-4 py-2 border">RM {{ number_format($food->price, 2) }}</td>
                <td class="px-4 py-2 border">{{ $food->type }}</td>
                <td class="px-4 py-2 border">
                    <a href="{{ route('foods.edit', $food->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('foods.destroy', $food->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        {{ $foods->links() }}
    </div>
</x-app-layout>
