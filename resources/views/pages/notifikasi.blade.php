@extends('layout.app')

@section('title', 'Notifikasi')
@section('page_title', 'Notifikasi')

@section('content')
  <div class="bg-gray-200 rounded-xl p-4 space-y-4">
    @foreach ($notifikasi as $notif)
      <div class="bg-white rounded-xl p-4 shadow-md">
        <p class="font-bold">{{ $notif["tanggal"] }}</p>
        <p class="text-gray-700">{{ $notif["pesan"] }}</p>
      </div>
    @endforeach
  </div>
@endsection
