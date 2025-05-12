@extends('layout.app')

@section('title', 'Beranda')
@section('page_title', 'Destinasi Wisata')

@section('content')
<div class="grid grid-cols-3 gap-4 p-4">

    <x-card 
        image="{{ asset('images/bali.jpg') }}" 
        title="Bali" 
        desc="Pulau Dewata dengan pantai indah dan budaya kuat." 
        button="Lihat Detail"
    />

    <x-card 
        image="{{ asset('images/yogyakarta.jpg') }}"
        title="Yogyakarta"
        desc="Kota budaya dan sejarah, rumah Candi Borobudur."
        button="Lihat Detail"
    />

    <x-card 
        image="{{ asset('images/lombok.jpg') }}"
        title="Lombok"
        desc="Gili eksotis dan pantai indah untuk berlibur."
        button="Lihat Detail"
    />

</div>
@endsection
