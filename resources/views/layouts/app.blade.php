<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-screen h-screen flex justify-start items-center flex-col bg-slate-50">
    @yield("content")
</body>
</html>