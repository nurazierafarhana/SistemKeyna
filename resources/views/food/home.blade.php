<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse($foods as $food)
        <div class="border rounded-md overflow-hidden shadow-sm">
            <img class="h-48 w-full object-cover" src="{{ $food->picture }}" alt="{{ $food->name }}">
            <div class="p-4">
                <h2 class="font-bold text-lg">{{ $food->name }}</h2>
                <p>Price: RM {{ number_format($food->price, 2) }}</p>
                <p>Type: {{ $food->type }}</p>
                <a href="{{ route('foods.show', $food->id) }}" class="text-blue-500 hover:underline">View Details</a>
            </div>
        </div>
        @empty
        <p class="text-gray-600 col-span-full text-center">No foods available.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $foods->links() }}
    </div>
</x-app-layout>
