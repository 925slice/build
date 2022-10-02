<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../../css/app.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="m-0 p-0 leading-relaxed flex flex-col min-h-screen">
    <header class="p-3 bg-lime-300 border-b border-gray-300 flex justify-between fixed w-full">
        <h1 class="text-xl">ビルド</h1>
        <div class="text-xl">{{ $app }}</div>
        <span class="material-icons text-2xl"><a href="">person</a></span>
    </header>
    <main class="grow my-16 mx-auto">
        {{ $slot }}
    </main>
    <footer>
        <nav class="m-0 p-0">
            <ul class="flex justify-around border-t border-gray-300 fixed bottom-0 w-full bg-white">
                <a href="" class="text-gray-700 text-center flex-1 hover:bg-gray-100"><li>案件管理</li></a>
                <a href="" class="border-x border-gray-300 text-gray-700 text-center flex-1 hover:bg-gray-100"><li>タスク管理</li></a>
                <a href="" class="text-gray-700 text-center flex-1 hover:bg-gray-100"><li>チャット</li></a>
            </ul>
        </nav>
    </footer>
</body>
</html>
