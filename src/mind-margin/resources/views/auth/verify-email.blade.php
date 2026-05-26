<x-auth-layout>
    <div class="min-h-screen flex items-center justify-center bg-offWhite px-4">

        <div class="w-full max-w-md bg-white rounded-xl shadow-sm p-8">

            <h2 class="text-xl font-bold text-center text-[#2F5D50] mb-6">メールアドレスの認証</h2>

            <p class="text-sm text-gray-500 text-center mb-5">登録したメールアドレスに認証メールを送信しました。</p>
            <p class="text-sm text-gray-500 text-center mb-8">メール認証を完了してください。</p>

            <div class="flex flex-col gap-6 text-center mb-2">
                <a href="http://localhost:8025" class="w-full bg-[#2f5d50] hover:bg-[#4F8A7A] transition text-white font-bold py-2 rounded-lg">認証はこちらから</a>
            </div>

            <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                @csrf

                <button type="submit" class="text-indigo-500 hover:text-purple-500 text-bold">認証メールを再送する</button>
            </form>
        </div>
    </div>
</x-auth-layout>