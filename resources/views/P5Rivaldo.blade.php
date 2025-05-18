<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Tailwind Lokal</title>
    
    <!-- Style dari praktikum -->
    <link rel="stylesheet" href="{{ asset('styles/style_rivaldo.css') }}">

    <!-- Tambahkan Tailwind lokal -->
    <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>
</head>
<body>

    <!-- Tes style CSS biasa -->
    <h1 class="text-3xl font-bold underline">Ini Judul Warnanya Merah</h1>

    <!-- Tes gambar + tailwind -->
    <div class="mt-4 p-4 bg-blue-200 rounded">
        <img src="{{ asset('images/bali.jpg') }}" alt="Gambar Bali" class="w-64 rounded shadow">
        <p class="text-lg mt-2">Ini gambar dengan styling Tailwind lokal</p>
    </div>

</body>
</html>
