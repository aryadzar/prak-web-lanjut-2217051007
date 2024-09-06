<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500">
    <div class="flex items-center justify-center h-screen ">
        <div class="bg-white p-8 rounded-lg shadow-lg text-black text-lg">
            <div class="avatar">
                <div class="w-24 rounded-full flex items-center">
                  <img src="/img/image.png" />
                </div>
            </div>
            <div class="mt-5">
                Nama : {{ $nama }}
            </div>
            <div class="mt-5">
                Kelas : {{ $kelas }}
            </div>
            <div class="mt-5">
                NPM : {{ $npm }}
            </div>
        </div>
    </div>
</body>
</html>
