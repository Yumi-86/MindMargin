<div class="flex flex-between pb-2">
    <div class="color-semiBlack font-semibold">マイノート<span class="color-mintGreen">{{ $notes->count() }}</span></div>

    <div class="rounded-md bg-mintGreen pb-2">
        <a href="#" class="color-gray">ノートを書く
        </a>
    </div>
</div>
<div class="flex flex-col gap-2 items-center">
    @forelse ($notes as $note)
    @include('notes.partials._item', ['note' => $note])
    @empty
    <div class="text-center py-3">まだノートはありません。</div>
    @endforelse
</div>