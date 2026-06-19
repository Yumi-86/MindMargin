<div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center">

    <div class="absolute inset-0 bg-black/50" @click="open = false"></div>

    <div class="relative bg-white rounded-xl shadow-lg p-6 w-full max-w-lg">
        <button class="absolute top-4 right-4 text-gray-400 hover:text-gray-600" @click="open = false">
            <x-heroicon-o-x-mark class="w-6 h-6"/>
        </button>
        {{ $slot }}
    </div>

</div>
