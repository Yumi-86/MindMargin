<div class="border-b border-[#E8E5E0] py-4">
    <div class="pb-2">
        <p class="leading-7">
            {{ $note->content}}
        </p>
    </div>
    <div class="flex justify-between items-center">
        <div class="text-semiBlack">
            {{ $note->created_at->format('Y-m-d') }}
        </div>
        <div class="w-50">
            <a href="#" class="px-3 py-1.5 rounded-md border border-[#D8D4CE] text-[#5C5C5C] hover:bg-[#F7F5F2] transition">
                編集
            </a>

            <form action="{{ route('notes.destroy', $book) }}">
                @csrf
                <button
                    class="px-3 py-1.5 rounded-md text-[#B06A6A] hover:bg-[#FDF2F2] transition">
                    削除
                </button>
            </form>
        </div>
    </div>
</div>