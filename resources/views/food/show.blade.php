<x-app-layout>
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold">{{ $food->name }}</h1>
        <img class="w-full h-64 object-cover my-4" src="{{ $food->picture }}" alt="{{ $food->name }}">
        <p class="text-gray-700">Price: RM {{ number_format($food->price, 2) }}</p>
        <p class="text-gray-600">{{ $food->description }}</p>
    </div>
</x-app-layout>
