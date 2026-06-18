<x-modal>
    <h2>マイノートを書く</h2>

    <form action="route('notes.store')" method="POST">
        <textarea name="content"></textarea>

        <button type="submit">投稿する</button>
    </form>
</x-modal>