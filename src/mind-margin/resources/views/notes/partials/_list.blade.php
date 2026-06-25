<div class="w-full flex justify-center items-center gap-10 items-center pb-2 mb-4 md:mb-8">
    <div class="font-semibold">
        <span class="text-gray-600">マイノート</span>
        <span class="text-gray-400">({{ $notes->count() }})</span>
    </div>

    <div class="rounded-md px-3 py-2 flex gap-2">
        <x-heroicon-s-pencil class="text-mainGreen w-5 h-5 md:w-6 md:h-6" />
        <button class="text-gray-700">
            ノートを書く
        </button>
    </div>
</div>
<div class="flex flex-col gap-2 items-center">
    @forelse ($notes as $note)
        @include('notes.partials._item', ['note' => $note])
    @empty
        <div class="text-center py-3">まだノートはありません。</div>
    @endforelse
</div>