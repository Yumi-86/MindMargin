<x-app-layout>
    <div class="min-h-screen flex flex-col items-center bg-offWhite w-full p-4 pb-24 gap4">
        <h2 class="text-md font-bold text-[#2F5D50] mb-6">
            今日の本との出会いの記録を残そう！
        </h2>
        @forelse ($books as $book)
            @include ('books.partials._card', [
                'book' => $book,
                'variant' => 'home'
            ])
        @empty
        <div class="w-full max-w-md bg-white rounded-xl shadow-sm p-8">
            <div class="text-xl font-bold text-center text-[#2F5D50]">
                追加された本はまだありません
            </div>
        </div>
        @endforelse
    </div>
</x-app-layout>