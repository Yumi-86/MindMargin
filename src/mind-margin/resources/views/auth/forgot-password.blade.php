<x-auth-layout>
    <div class="min-h-screen flex items-center justify-center bg-offWhite px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-sm p-8">

            <h2 class="text-xl font-bold text-center text-[#2F5D50] mb-6">パスワード再設定</h2>

            <p class="text-sm text-gray-500 text-center mb-8">登録したメールアドレスに再設定用リンクを送信します</p>

            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6">
                @csrf

                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4F8A7A]" placeholder="test@test.com">

                <button type="submit" class="w-full bg-[#2f5d50] hover:bg-[#4F8A7A] transition text-white font-bold py-2 rounded-lg">リンクを送信</button>
            </form>
        </div>
    </div>
</x-auth-layout>