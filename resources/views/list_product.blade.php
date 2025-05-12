@extends('layout.list')

@section('content')
    <h2>Daftar Alat Olahraga</h2>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['id'] }} - {{ $product['name'] }}</li>
        @endforeach
    </ul>
@endsection
