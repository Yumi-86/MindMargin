<div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center">

    <div class="absolute inset-0 bg-black/50" @click="$dispatch('close-modal')"></div>

    <div class="relative bg-white rounded-xl shadow-lg p-6 w-full max-w-lg">
        {{ $slot }}
    </div>

</div>
