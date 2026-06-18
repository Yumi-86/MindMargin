<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMargin</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-gray-100">
    <header class="shadow bg-[#2F5D50]">
        <div class="max-w-2xl md:max-w-3xl lg:max-w-7xl mt-auto m-auto py-3 px-2 md:py-4 md:px-2 text-center font-bold flex items-center justify-around">
            <div class="w-20"></div>
            <h1 class="w-70 md:w-120 font-bold text-white text-lg md:text-2xl">MindMargin</h1>
            <form method="post" action="{{ route('logout') }}" class="w-20 h-4 md:h-8 flex items-center justify-center border-2 md:border-3 border-yellow-900 rounded-sm text-bold text-xs md:text-md">
                @csrf
                <button type="submit" class="text-yellow-900">ログアウト</button>
            </form>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <div class="fixed bottom-0 w-full">
        <x-app.bottom-nav />
    </div>

    <script>
        window.flashMessage = @json(session('status'));
    </script>
</body>

</html>