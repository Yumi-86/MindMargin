<x-app-layout>
    <div class="flex flex-col items-center bg-offWhite w-full max-w-3xl mx-auto px-6 lg:px-8 my-5 pb-24">
        @include ('books.partials._summary', [
            'book' => $book
        ])
        <div class="flex text-center pb-2 w-full">
            <a href="{{ route('books.show', ['book' => $book, 'tab' => 'reviews']) }}" class="pb-1 w-1/2 border-b-3 border-gray-400 {{ $tab === 'reviews'
                ? 'border-b-3 border-gray-600 color-mainGreen font-semibold'
                : 'color-gray'}}">
                レビュー
            </a>

            <a href="{{ route('books.show', ['book' => $book, 'tab' => 'notes']) }}" class="pb-1 w-1/2  border-b-3 border-gray-400
            {{ $tab === 'notes'
                ? 'border-b-3 border-gray-600 color-mainGreen font-semibold'
                : 'color-gray'}}">
                マイノート
            </a>
        </div>

        @if($tab === 'reviews')
            <div x-data="{ open: {{$errors->review->any() ? 'true' : 'false'}} }" class="w-full">
                @include('reviews.partials._list', [
                    'reviews' => $book->publicReviews,
                ])

                <x-modal>
                    @include('reviews.partials._create_modal',[
                        'book' => $book,
                    ])
                </x-modal>
            </div>
        @else
                @include('notes.partials._list', [
                    'notes' => $book->notes,
                    'book' => $book
                ])
        @endif
    </div>
</x-app-layout>