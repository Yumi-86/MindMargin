<div class="flex flex-col w-full max-w-md mx-auto">

    <h2 class="text-center font-semibold mb-5">
        この本はいかがでしたか？
    </h2>

    <form action="{{ route('reviews.store') }}" method="POST" class="flex flex-col gap-3" novalidate>

        <div x-data="{ rating: 0 }" class="flex flex-col items-center gap-2">
            <input type="hidden" name="rating" x-model="rating">
            
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
        </div>

        <div class="space-y-2">
            <label for="content" class="block text-sm font-medium text-gray-700">レビューを書く</label>
            <textarea name="content" id="content"  class="w-full border border-gray-300 px-3 py-2 min-h-32 rounded-lg"></textarea>
        </div>

        <div class="space-x-8">
            <label class="text-sm font-medium text-gray-700">
                <input type="radio" name="is_public" value="true" {{ old('is_public', $post->is_public ?? '') == 'true' ? 'checked' : '' }}>
                公開
            </label>
            <label class="text-sm font-medium text-gray-700">
                <input type="radio" name="is_public" value="false" {{ old('is_public', $post->is_public ?? '') == 'false' ? 'checked' : '' }}>
                非公開
            </label>
        </div>
        

        <div class="space-y-2">
            <label for="title" class="block text-sm font-medium text-gray-700">レビュータイトル（必須）</label>
            <input
                type="text"
                name="title"
                id="title"
                class="w-full p-1 border border-gray-300 rounded-lg px-3 py-2">
        </div>
        
        <button type="submit" class="w-full py-3 rounded-lg text-white font-medium shadow-sm bg-mainGreen hover:opacity-90 transition">投稿する</button>
    </form>
</div>
