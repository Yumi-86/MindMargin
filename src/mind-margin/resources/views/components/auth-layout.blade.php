<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMargin</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-gray-100">

    @if()

    <main>
        {{ $slot }}
    </main>
</body>

</html>