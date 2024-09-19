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
    <div class="flex items-center justify-center h-screen container mx-auto ">
        <div class="bg-white p-8  rounded-lg shadow-lg text-black text-lg w-full">
            <div class=" mt-5 form-control">
                <h3 class="text-center text-4xl mb-3 font-bold font-sans">Form Mahasiswa</h3>
            </div>
            <form action="" method="POST">
                @csrf
                <div class=" mt-5 form-control">
                    <label for="name" class="mb-3">Nama Anda</label>
                    <input type="text" name="name" id="name" class=" bg-white border border-indigo-200 h-10 rounded-lg py-1 px-2" required>
                </div>
                <div class=" mt-5 form-control">
                    <label for="npm" class="mb-3">NPM</label>
                    <input type="number" name="npm" id="npm" class=" bg-white border border-indigo-200 h-10 rounded-lg py-1 px-2" required>
                </div>
                <div class=" mt-5 form-control">
                    <label for="kelas" class="mb-3">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class=" bg-white border border-indigo-200 h-10 rounded-lg py-1 px-2" required>
                </div>
                <div class=" mt-5 flex justify-end">
                    <button type="submit" class=" btn btn-info bg-blue-700">Buat </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
