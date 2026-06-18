<div class="flex flex-col gap-1 items-center">
    <div class="flex items-center gap-13">
        <div class="text-semiBlack font-semibold">
            {{ $review->user->name }}
        </div>
        
        <div class="flex items-center gap-1">
            @for($i = 1; $i <= 5; $i++)
                @if($i <= $review->score )
                <x-heroicon-s-star class="w-4 h-4 text-yellow-400"/>
                @else
                <x-heroicon-o-star class="w-4 w-4 text-gray-300"/>
                @endif
            @endfor
        </div>
    </div>
    <div class="p-1 text-semiBlack">
        {{ $review->content }}
    </div>
</div>