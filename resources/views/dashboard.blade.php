<x-app-layout>

    <div class="hidden flex w-full justify-center items-center" id="message-modal" data-object="{{ Session::get('unauthorized') }}">
        <div class="px-4 py-2 mb-4 mx-2 bg-red-100 w-8/12 flex">
            <p id="message-content" class="text-red-800 flex-grow m-auto font-semibold"></p>
            <button type="button" class="close text-lg" id="close">x</button>
        </div>
    </div>
    
    <div class="mx-8 my-4">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex items-center space-x-4">
                <span class="font-bold">Kategori:</span>
                @foreach(['Semua' => 'dashbord','Minuman' => 'Minuman', 'Aiskrim' => 'Aiskrim', 'Nasi' => 'Nasi', 'Pencuci Mulut' => 'Pencuci Mulut'] as $label => $filter)
                <div class="py-1 px-3 border border-slate-300 rounded-xl bg-white">
                    <a href="{{ route('dashboard', ['filter' => $filter]) }}" class="text-gray-700 hover:text-blue-500">{{ $label }}</a>
                </div>
                @endforeach
            </div>
            <div class="flex items-center space-x-4">
                <span class="font-bold">Susun mengikut:</span>
                <div class="py-1 px-3 border border-slate-300 rounded-xl bg-white">
                    <a href="{{ request()->fullUrlWithQuery(['asc' => true]) }}" class="text-gray-700 hover:text-blue-500">Terendah</a>
                </div>
                <div class="py-1 px-3 border border-slate-300 rounded-xl bg-white">
                    <a href="{{ request()->fullUrlWithQuery(['asc' => false]) }}" class="text-gray-700 hover:text-blue-500">Tertinggi</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
        @foreach($foods as $data)
        <div class="rounded-md overflow-hidden shadow-md border border-gray-200 hover:shadow-lg transition">
            <a href="{{ route('food.show', $data['id']) }}">
                <img class="h-48 w-full object-cover" src="{{ $data['picture'] }}" alt="{{ $data['name'] }}">
                <div class="p-4">
                    <h2 class="font-bold text-xl mb-2">{{ $data['name'] }}</h2>
                    <p class="text-gray-700 text-base">RM {{ number_format($data['price'], 2) }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
    <div class="p-5">
        {{ $foods->appends(request()->query())->links() }}
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('message-modal');
            const content = document.getElementById('message-content');
            const closeBtn = document.getElementById('close');
    
            if (modal.dataset.object !== '') {
                modal.classList.remove('hidden');
                content.textContent = modal.dataset.object;
            }
    
            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        });
    </script>
</x-app-layout>
