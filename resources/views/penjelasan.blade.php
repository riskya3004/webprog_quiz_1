<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/penjelasan-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>@yield('title','Description')</title>
</head>
<body>
    {{-- <h1>test</h1> --}}
    @extends('master')
    @section('konten')
        <div class="show-description" style="margin-top: 2vw">
            @foreach ($product as $barang )
                @if ($barang['idproduct'] == $id)
                    <div class="flex-container" style="display: flex; gap:2vw;">
                        <div class="image-container">
                            <img class="gambar-barang" style="width:35vw; height:30vw; margin-left:2vw" src="{{ asset('img/'. $barang['image-produk']) }}" alt="{{ $barang['nameproduct'] }}">
                        </div>
                        <div class="content-container" style="margin-right: 2vw; text-align:justify;">
                            <h4 class="nama-barang">{{ $barang['nameproduct'] }}</h4>
                            <h2 class="rarity-barang">{{ $barang['rarityproduk'] }}</h2>
                            <p class="deskripsi-panjang-barang">{{ $barang['description-panjang-produk'] }}</p>
                            <p class="harga-barang" style="font-size: 1.5rem">Price : {{ $barang['priceproduk'] }}</p>
                        </div>
                    </div>

                @endif

            @endforeach
        </div>
    @endsection
</body>

</html>
