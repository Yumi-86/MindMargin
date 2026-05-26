<x-auth-layout>
    <div class="min-h-screen flex items-center justify-center PX-4 bg-offWhite">
        <div class="w-full max-w-md bg-white rounded-xl shadow-sm p-8">

            <h2 class="text-xl font-bold text-center mb-6 text[#2F5D50]">パスワード再設定</h2>

            <p class="text-sm text-gray-500 text-center mb-8">新しいパスワードを入力してください</p>

            <form method="post" action="{{ route('password.email') }}" class="flex flex-col gap-6">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <input type="email" name="email" value="{{ old('email', $request->email) }}" class="w-full border border-gray-300 rounded-ld px-4 py-4 focus:outline-none focus:ring-2 focus:ring-[#4F8A7A]" required>

                <input type="password" name="password" class="w-full border border-gray-300 rounded-ld px-4 py-4 focus:outline-none focus:ring-2 focus:ring-[#4F8A7A]" required placeholder="新しいパスワード">

                <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-ld px-4 py-4 focus:outline-none focus:ring-2 focus:ring-[#4F8A7A]" required placeholder="パスワード（確認）">

                <button type="summit" class="w-full bg-[#2F5D50] hover:bg-[#4F8A7A] transition text-white font-bold py-2 rounded-lg">パスワードをリセット</button>
            </form>
        </div>
    </div>
</x-auth-layout>