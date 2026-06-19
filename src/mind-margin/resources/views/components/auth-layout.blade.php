<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMargin</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-gray-100">

    @if(session('status'))
        <div
            x-data="{show:true}"
            x-show="{show}"
            x-init="setTimeout(() => show = false, 3000)"
            class="fixed top-4 right-4 z-50 bg-green-500 text-white px-4 py-2 rounded-lg shadow"
        >
            {{ session('status') }}
        </div>
    @endif

    <main>
        {{ $slot }}
    </main>
</body>

</html>