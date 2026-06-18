<a href="{{ route('books.show', $book) }}">
    <div class="bg-white rounded-lg shadow-sm mb-3 flex justify-around {{ $variant === 'home' ? 'w-full md:max-w-lg rounded-xl p-8' : 'p-4 border-b-2 border-semiBlack pb-5' }}">
        <div class="w-1/3 pr-3">
            @php
                if (!$book->thumbnail) {
                    $src = asset('image/placeholder.jpg');
                } elseif (Str::contains($book->thumbnail, 'via.placeholder.com')) {
                    $src = asset('image/placeholder.jpg');
                } elseif (Str::startsWith($book->thumbnail, 'http')) {
                    $src = $book->thumbnail;
                } else {
                    $src = asset('storage/' . $book->thumbnail);
                }
            @endphp
            <img src="{{ $src }}" alt="本画像" class="w-full h-auto object-cover">
        </div>
        <div class="w-2/3 flex flex-col gap-3">
            <div class="font-semibold text-lg">
                {{ $book->title }}
            </div>
            <div class="text-md">
                {{ $book->author }}
            </div>

            @php
                $avg = $book->reviews_avg_score ?? 0;
            @endphp

            <div class="flex items-center gap-1">
                @for(
                    $i = 1;
                    $i
                    <= 5;
                    $i++
                )

                    @if($i <= floor($avg))
                    <x-heroicon-s-star class="w-4 h-4 text-yellow-400" />
                @else
                <x-heroicon-o-star class="w-4 h-4 text-gray-300" />
                @endif
                @endfor
    
                <span class="text-sm text-gray-500 ml-1">
                    {{ number_format($avg, 1) }}
                </span>
            </div>
            @if($variant === 'home')
                <div class="w-full py-1">
                    @if($book->latestReview)
                    <div class="text-sm text-gray-600 line-clamp-2">
                        {{ $book->latestReview->user->name }}
                        {{ $book->latestReview->title }}
                    </div>
                    @else
                    <div class="text-gray-400 text-sm">
                        レビューなし
                    </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</a>