<div class="w-full flex justify-between items-center pb-2">
    <div class="font-semibold">
        <span class="text-gray-600">レビュー</span>
        <span class="text-gray-400">({{ $reviews->count() }})</span>
    </div>

    <div class="rounded-md bg-mintGreen px-3 py-2">
        <a href="#" class="text-gray-700">レビュを書く
        </a>
    </div>
</div>
<div class="flex flex-col gap-2 items-center">
    @forelse ($reviews as $review)
        @include('reviews.partials._item', ['review' => $review])
    @empty
        <div class="text-center py-3">まだレビューはありません。</div>
    @endforelse
</div>