@extends('layout.app')

@section('title', 'Progres Latihan')
@section('page_title', 'Progres Latihan')

@section('content')
  <!-- Profil Section -->
  <div class="bg-white rounded-xl shadow-md p-6 mb-6 flex items-center space-x-4">
    <div class="w-20 h-20 bg-gray-200 rounded-full"></div>
    <div class="border border-gray-300 rounded-lg px-6 py-2">
      <h2 class="font-bold text-lg">Rivaldo Franscisco</h2>
      <p class="text-sm text-gray-500">Pria, 19 Tahun</p>
    </div>
  </div>

  <!-- Grafik Section -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Grafik Latihan -->
    <div class="bg-white rounded-xl shadow-md p-6">
      <h2 class="text-xl font-semibold mb-2">Kalori Latihan Fisik</h2>
      <canvas id="latihanChart" class="w-full h-64"></canvas>
    </div>

    <!-- Grafik Makan -->
    <div class="bg-white rounded-xl shadow-md p-6">
      <h2 class="text-xl font-semibold mb-2">Kalori Program Makan</h2>
      <canvas id="makanChart" class="w-full h-64"></canvas>
    </div>
  </div>

  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Chart Setup -->
  <script>
    const labels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

    const latihanCtx = document.getElementById('latihanChart').getContext('2d');
    new Chart(latihanCtx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Kalori Latihan',
          data: [400, 320, 250, 330, 290, 390],
          backgroundColor: 'rgba(75, 85, 99, 0.7)',
          borderRadius: 8,
          barThickness: 40
        }]
      },
      options: {
        responsive: true,
        animation: {
