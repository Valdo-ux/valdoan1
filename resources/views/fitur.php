<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitur MetaMeal</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-400 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-green-700 text-white px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-2">
      <img src="/path-to-your-logo.png" alt="MetaMeal Logo" class="h-8 w-8">
      <span class="text-xl font-bold">
        <span class="text-purple-600">Meta</span><span class="text-white">Meal</span>
      </span>
    </div>
    <ul class="flex space-x-6">
      <li><a href="login.php" class="hover:underline">Home</a></li>
      <li><a href="about.php" class="hover:underline">About</a></li>
      <li><a href="fitur.php" class="hover:underline">Fitur</a></li>
    </ul>
    <div class="space-x-2">
      <a href="#" class="bg-white text-green-700 px-3 py-1 rounded hover:bg-gray-100 font-semibold">Login</a>
      <a href="#" class="border border-white text-white px-3 py-1 rounded hover:bg-white hover:text-green-700 font-semibold">Register</a>
    </div>
  </nav>

  <!-- Fitur Section -->
  <section class="bg-gray-100 p-10 md:p-16 rounded-lg mx-4 md:mx-20 my-10 shadow">
    <h2 class="text-2xl md:text-3xl font-bold text-center mb-10">Fitur Unggulan MetaMeal</h2>
    <div class="grid md:grid-cols-3 gap-6 text-center">
      
      <!-- Fitur 1 -->
      <div class="bg-white p-6 rounded-lg shadow">
        <div class="text-xl text-blue-500 mb-4">❝</div>
        <p class="mb-4">Pilih rencana makan yang sesuai dengan kebutuhan dan tujuan diet Anda. Dapatkan rekomendasi menu sehat dan mudah dibuat!</p>
        <h3 class="font-semibold text-gray-700">Program Makan Sehat</h3>
      </div>

      <!-- Fitur 2 -->
      <div class="bg-blue-600 text-white p-6 rounded-lg shadow">
        <div class="text-xl mb-4">❝</div>
        <p class="mb-4">Tingkatkan kebugaran Anda dengan latihan fisik yang dirancang untuk semua level, dari pemula hingga lanjutan.</p>
        <h3 class="font-semibold">Latihan Fisik</h3>
      </div>

      <!-- Fitur 3 -->
      <div class="bg-white p-6 rounded-lg shadow">
        <div class="text-xl text-blue-500 mb-4">❝</div>
        <p class="mb-4">Pantau asupan kalori dan progres berat badan Anda dengan laporan lengkap untuk memaksimalkan hasil yang optimal.</p>
        <h3 class="font-semibold text-gray-700">Laporan Kalori & Progres</h3>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-green-700 text-white py-6 px-6 mt-10">
    <div class="md:flex justify-between">
      
      <div class="mb-4 md:mb-0">
        <h4 class="text-lg font-bold">MetaMeal</h4>
        <p class="text-sm">Copyright © 2025 MetaMeal<br>All rights reserved</p>
        <div class="flex space-x-2 mt-2">
          <img src="/icons/facebook.svg" class="h-5 w-5" alt="FB">
          <img src="/icons/twitter.svg" class="h-5 w-5" alt="TW">
          <img src="/icons/instagram.svg" class="h-5 w-5" alt="IG">
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4 text-sm">
        <div>
          <h5 class="font-semibold mb-2">Company</h5>
          <ul class="space-y-1">
            <li><a href="#" class="hover:underline">Blog</a></li>
            <li><a href="#" class="hover:underline">Pricing</a></li>
            <li><a href="#" class="hover:underline">About us</a></li>
            <li><a href="#" class="hover:underline">Contact Us</a></li>
            <li><a href="#" class="hover:underline">Testimonials</a></li>
          </ul>
        </div>
        <div>
          <h5 class="font-semibold mb-2">Legal</h5>
          <ul class="space-y-1">
            <li><a href="#" class="hover:underline">Legal Policy</a></li>
            <li><a href="#" class="hover:underline">Status Policy</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>

    </div>
  </footer>

</body>
</html>
