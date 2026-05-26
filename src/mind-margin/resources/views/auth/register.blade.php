<x-auth-layout>
    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2">

        <div class="bg-[#2F5D50] p-10 flex flex-col justify-center text-white">
            <h1 class="text-2xl md:text-4xl font-bold">MindMarginへようこそ！</h1>
            <p class="mt-4 text-md md:text-lg">アカウントを作成して、サービスを始めましょう。</p>
        </div>


        <div class="flex justify-center items-center p-10 bg-offWhite">
            <div class="w-full max-w-sm">
                <h2 class="text-2xl text-center font-semibold mb-6 text-[#2C2C2C]">新規登録</h2>
                <form method="post" action="/register" class="space-y-4" novalidate>
                    @csrf
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="名前"
                        class="w-full p-3 border rounded-lg transition-all hover:border-indigo-500 hover:ring-indigo-500 hover:shadow-sm @error('name') border-red-500 @enderror">
                    @error('name')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス"
                        class="w-full p-3 border rounded-lg hover:border-indigo-500 hover:ring-indigo-500 hover:shadow-sm @error('email') border-red-500 @enderror">
                    @error('email')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <input type="password" name="password" placeholder="パスワード"
                        class="w-full p-3 border rounded-lg hover:border-indigo-500 hover:ring-indigo-500 hover:shadow-sm @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <input type="password" name="password_confirmation" placeholder="パスワード（確認）"
                        class="w-full p-3 border rounded-lg hover:border-indigo-500 hover:ring-indigo-500 hover:shadow-sm">

                    <button class="w-full bg-gray-900 text-white p-3 rounded-lg hover:bg-[#4F8A7A]">アカウント作成</button>
                </form>
                <div class="my-5 text-center">
                    <a href="/login" class="text-indigo-500 hover:text-indigo-700 visited-text-purple-600">ログイン画面へ</a>
                </div>
            </div>
        </div>
    </div>

</x-auth-layout>