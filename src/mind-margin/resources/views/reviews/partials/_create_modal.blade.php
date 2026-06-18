<div class="flex flex-col">

    <h2 class="text-center font-semibold mb-5">この本はいかがでしたか？</h2>
    
    <form action="route('reviews.store')" method="POST" class="flex flex-col items-center" novalidate>
    
        <div x-data="{ rating: 0 }">
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
    
        <label for="content" class="text-right">レビューを書く</label>
        <textarea name="content" id="content"  class="border border-gray-900 rounded-lg"></textarea>
    
        <label>
            <input type="radio" name="is_public" value="true" {{ old('is_public', $post->is_public ?? '') == 'true' ? 'checked' : '' }}>
            公開
        </label>
    
        <label for="title text-right">レビュータイトル（必須）</label>
        <input type="text" name="title" id="title">
    
        <button type="submit" class="">投稿する</button>
    </form>
</div>
