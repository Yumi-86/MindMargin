<x-auth-layout>
    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <!-- 左側: メッセージエリア -->
        <div class="bg-[#2F5D50] p-10 flex flex-col justify-center text-white">
            <h1 class="text-2xl md:text-4xl font-bold">MindMarginへようこそ！</h1>
            <p class="mt-4 text-md md:text-lg">アカウントにログインして、サービスを始めましょう。</p>
        </div>

        <!-- 右側: フォームエリア -->
        <div class="flex justify-center items-center p-10 bg-offWhite">
            <div class="w-full max-w-sm">
                <h2 class="text-2xl text-center font-semibold mb-6 text-[#2C2C2C]">ログイン</h2>
                <form method="post" action="/login" class="space-y-4" novalidate>
                    @csrf
                    <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}"
                        class="w-full p-3 border rounded-lg hover:border-indigo-500 hover:ring-indigo-500 hover:shadow-sm @error('email') border-red-500 @enderror">
                    @error('email')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <input type="password" name="password" placeholder="パスワード" class="w-full p-3 border rounded-lg hover:border-indigo-500 hover:ring-indigo-500 hover:shadow-sm @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <button class="w-full bg-gray-900 text-white p-3 rounded-lg hover:bg-[#4F8A7A]">ログイン</button>
                </form>
                <div class="mt-5 mb-2 text-center">
                    <a href="/register" class="text-indigo-500 hover:text-indigo-700 visited-text-purple-600">アカウントをお持ちでない方</a>
                </div>
                <div class="my-2 text-center">
                    <a href="{{ route('password.request') }}" class="text-indigo-500 hover:text-indigo-700 visited-text-purple-600">パスワードを忘れた方</a>
                </div>
            </div>
        </div>
    </div>

</x-auth-layout>