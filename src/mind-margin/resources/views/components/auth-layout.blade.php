<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMargin</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-gray-100">
    <script>
        window.flashMessage = @json(session('status'));
    </script>

    <div id="flash-root"></div>

    <main>
        
        {{ $slot }}
    </main>
</body>

</html>