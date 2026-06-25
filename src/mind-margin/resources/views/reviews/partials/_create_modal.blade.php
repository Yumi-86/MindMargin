<div class="flex flex-col w-full max-w-md mx-auto">

    <h2 class="text-center font-semibold mb-5">
        この本はいかがでしたか？
    </h2>

    <form action="{{ route('books.reviews.store', $book) }}" method="POST" class="flex flex-col gap-3" novalidate>
        @csrf

        <div x-data="{ rating: {{ old('score') ?? 'null' }} }" class="flex flex-col items-center gap-2">
            <input type="hidden" name="score" x-model="rating">

            <div class="flex gap-1">
                @for ($i = 1; $i <= 5; $i++)
                    <button type="button" @click="rating = {{ $i }}">
                        <template x-if="rating >= {{ $i }}">
                            <x-heroicon-s-star class="w-6 h-6 text-yellow-400" />
                        </template>

                        <template x-if="rating < {{ $i }}">
                            <x-heroicon-o-star class="w-6 h-6 text-gray-300" />
                        </template>
                    </button>
                @endfor
            </div>
            @if($errors->review->has('score'))
                <div class="text-red-500 text-sm">
                    {{ $errors->review->first('score') }}
                </div>
            @endif
        </div>

        <div class="space-y-2">
            <label for="content" class="block text-sm font-medium text-gray-700">レビューを書く</label>
            <textarea name="content" id="content"  class="w-full border border-gray-300 px-3 py-2 min-h-32 rounded-lg @if($errors->review->has('content')) border-red-700 @endif">{{ old('content') }}</textarea>
            @if($errors->review->has('content'))
                <div class="text-red-500 text-sm">
                    {{ $errors->review->first('content') }}
                </div>
            @endif
        </div>

        <div class="space-x-8">
            <label class="text-sm font-medium text-gray-700">
                <input type="radio" name="is_public" value="1" {{ old('is_public', $review->is_public ?? '') == '1' ? 'checked' : '' }}>
                公開
            </label>
            <label class="text-sm font-medium text-gray-700">
                <input type="radio" name="is_public" value="0" {{ old('is_public', $review->is_public ?? '') == '0' ? 'checked' : '' }}>
                非公開
            </label>
            @if($errors->review->has('is_public'))
            <div class="text-red-500 text-sm">
                {{ $errors->review->first('is_public') }}
            </div>
            @endif
        </div>
        

        <div class="space-y-2">
            <label for="title" class="block text-sm font-medium text-gray-700">レビュータイトル（必須）</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}"
                class="w-full p-1 border border-gray-300 rounded-lg px-3 py-2 @if($errors->review->has('title')) border-red-700 @endif">
                @if($errors->review->has('title'))
                    <div class="text-red-500 text-sm">
                        {{ $errors->review->first('title') }}
                    </div>
                @endif
        </div>
        
        <button type="submit" class="w-full py-3 rounded-lg text-white font-medium shadow-sm bg-mainGreen hover:opacity-90 transition">投稿する</button>
    </form>
</div>
