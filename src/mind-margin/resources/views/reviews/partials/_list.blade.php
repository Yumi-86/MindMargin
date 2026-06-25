<div class="w-full flex justify-center gap-10 items-center pb-2 mb-4 md:mb-8">
    <div class="font-semibold">
        <span class="text-gray-600">レビュー</span>
        <span class="text-gray-400">({{ $reviews->count() }})</span>
    </div>

    <div class="rounded-md px-3 py-2 flex gap-2">
        <x-heroicon-s-pencil class="text-mainGreen w-5 h-5 md:w-6 md:h-6" />

        <button @click="open = true" class="text-gray-700">レビューを書く
        </button>
    </div>
</div>
<div class="w-full flex flex-col gap-2 items-center">
    @forelse ($reviews as $review)
        @include('reviews.partials._item', [
            'review' => $review
        ])
    @empty
        <div class="text-center py-3">まだレビューはありません。</div>
    @endforelse
</div>