<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Makan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" defer></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="bg-[#A0D468] text-white w-64 p-4">
      <div class="flex items-center mb-8">
        <img src="logo.jpeg" alt="Logo" class="h-20 w-20 rounded-full shadow-md border border-gray-200">
        <div>
          <h1 class="text-2xl font-bold">MetaMeal</h1>
          <p class="italic">Selamat Datang</p>
        </div>
      </div>
      <nav>
        <ul>
          <li class="mb-4 flex items-center hover:bg-white hover:text-[#5F8C2D] rounded-lg p-2 transition duration-200 ease-in-out">
            <i class="fas fa-home mr-2"></i>
            <a href="/beranda" class="text-lg">Beranda</a>
          </li>
          <li class="mb-4 flex items-center bg-white text-[#5F8C2D] rounded-lg p-2 font-semibold shadow-md">
            <a href="/resepmakan" class="text-lg">Program Makan</a>
          </li>
          <li class="mb-4 flex items-center hover:bg-white hover:text-[#5F8C2D] rounded-lg p-2 transition duration-200 ease-in-out">
            <i class="fas fa-running mr-2"></i>
            <a href="/programlatihan" class="text-lg">Program Latihan</a>
          </li>
          <li class="mb-4 flex items-center hover:bg-white hover:text-[#5F8C2D] rounded-lg p-2 transition duration-200 ease-in-out">
            <i class="fas fa-chart-line mr-2"></i>
            <a href="/progres" class="text-lg">Laporan Latihan</a>
          </li>
        </ul>
      </nav>
    </aside>
    <!-- Main Content -->
    <div class="flex-1 p-6">
      <!-- Header -->
      <div class="flex justify-between items-center mb-6 bg-[#5F8C2D] p-4 rounded-lg text-white shadow">
        <div class="flex items-center bg-white rounded-full shadow-md p-2 w-full md:w-1/2">
          <i class="fas fa-search text-gray-400 ml-2"></i>
          <input type="text" placeholder="Search..." class="ml-2 w-full border-none focus:outline-none bg-transparent text-black">
        </div>
      </div>
      <!-- Content List -->
      <div class="space-y-4">
        <!-- Resep Ayam -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Senin, 8 April 2025</p>
            <p class="text-sm">Resep Ayam</p>
          </div>
          <button onclick="showModal('ayam')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>
        <!-- Resep Ubi -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Selasa, 9 April 2025</p>
            <p class="text-sm">Resep Ubi Goreng</p>
          </div>
          <button onclick="showModal('ubi')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>
        <!-- Resep Telur -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Rabu, 10 April 2025</p>
            <p class="text-sm">Resep Telur</p>
          </div>
          <button onclick="showModal('telur')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div id="resepModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl relative">
      <button onclick="toggleModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
      <div id="modalContent">
        <!-- Konten resep dimasukkan lewat JS -->
      </div>
    </div>
  </div>
  <!-- Script -->
  <script>
    function toggleModal() {
      const modal = document.getElementById("resepModal");
      modal.classList.toggle("hidden");
    }
    function showModal(type) {
      const content = {
        ubi: `
          <h3 class="text-2xl font-bold mb-4">🍠 Ubi Goreng Sehat (Tanpa Minyak)</h3>
          <p class="font-semibold">Bahan:</p>
          <ul class="list-disc list-inside mb-4">
            <li>1 buah ubi manis (ungu atau kuning)</li>
            <li>1 sdt minyak zaitun (opsional)</li>
            <li>Sejumput garam (boleh skip)</li>
            <li>Kayu manis bubuk (opsional)</li>
          </ul>
          <p class="font-semibold">Cara Membuat:</p>
          <ol class="list-decimal list-inside">
            <li>Kupas ubi dan potong memanjang atau bulat tipis.</li>
            <li>Rendam dalam air 10-15 menit, tiriskan.</li>
            <li>Baluri dengan minyak zaitun dan garam (jika dipakai).</li>
            <li>Panggang suhu 180°C selama ±25 menit (bisa juga pakai air fryer).</li>
            <li>Taburi kayu manis bila suka.</li>
          </ol>
        `,
        ayam: `
          <h3 class="text-2xl font-bold mb-4">🍗 Ayam Goreng Renyah</h3>
          <p class="font-semibold">Bahan:</p>
          <ul class="list-disc list-inside mb-4">
            <li>500 gram ayam</li>
            <li>3 siung bawang putih</li>
            <li>1 sdt ketumbar</li>
            <li>1 sdt garam</li>
            <li>1 ruas kunyit</li>
            <li>Minyak goreng secukupnya</li>
          </ul>
          <p class="font-semibold">Cara Membuat:</p>
          <ol class="list-decimal list-inside">
            <li>Haluskan bumbu, balurkan ke ayam dan diamkan.</li>
            <li>Rebus ayam sampai air menyusut.</li>
            <li>Goreng dalam minyak panas hingga kecoklatan.</li>
          </ol>
        `,
        telur: `
          <h3 class="text-2xl font-bold mb-4">🥚 Telur Dadar Simple</h3>
          <p class="font-semibold">Bahan:</p>
          <ul class="list-disc list-inside mb-4">
            <li>2 butir telur</li>
            <li>Garam & merica secukupnya</li>
            <li>Daun bawang (opsional)</li>
          </ul>
          <p class="font-semibold">Cara Membuat:</p>
          <ol class="list-decimal list-inside">
            <li>Kocok semua bahan dalam mangkuk.</li>
            <li>Panaskan sedikit minyak, tuang telur.</li>
            <li>Masak sampai matang kedua sisi. Sajikan hangat.</li>
          </ol>
        `
      };
      document.getElementById("modalContent").innerHTML = content[type];
      toggleModal();
    }
  </script>
</body>
</html>
