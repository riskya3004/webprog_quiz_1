<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/product-style.css">
    <title>@yield('title', 'Products')</title>
</head>
<body>
    {{-- @include('layout.navbar') --}}
        <div class="show-box">
            @foreach ($product as $barang)
                @if ($barang['rarityproduk'] == "Rare")

                        <div class="kelas-rare">
                            <a href="penjelasan/{{ $barang['idproduct'] }}" class="kotak-barang-rare">
                                <div class="kotak-detail" >
                                    <img class="gambar-barang" src="{{ asset('img/'. $barang['image-produk']) }}" alt="{{ $barang['nameproduct'] }}">
                                    <h4 class="nama-barang">{{ $barang['nameproduct'] }}</h4>
                                    <h2 class="rarity-barang">{{ $barang['rarityproduk'] }}</h2>
                                    <p class="deskripsi-singkat-barang">{{ $barang['description-singkat-produk'] }}</p>
                                    <p class="harga-barang">{{ $barang['priceproduk'] }}</p>
                                </div>
                            </a>
                        </div>


                @elseif ($barang['rarityproduk'] == "S-Rare")
                        <div class="kelas-Srare" style="">
                            <a href="penjelasan/{{ $barang['idproduct'] }}" class="kotak-barang-SRare">
                                <div class="kotak-detail">
                                <img class="gambar-barang" src="{{ asset('img/'. $barang['image-produk']) }}" alt="{{ $barang['nameproduct'] }}">
                                <h4 class="nama-barang">{{ $barang['nameproduct'] }}</h4>
                                <h2 class="rarity-barang">{{ $barang['rarityproduk'] }}</h2>
                                <p class="deskripsi-singkat-barang">{{ $barang['description-singkat-produk'] }}</p>
                                <p class="harga-barang">{{ $barang['priceproduk'] }}</p>
                                </div>
                            </a>
                        </div>


                @elseif ($barang['rarityproduk'] == "SS-Rare")
                        <div class="kelas-SSrare">
                            <a href="penjelasan/{{ $barang['idproduct'] }}" class="kotak-barang-SSRare">
                                <div class="kotak-detail">
                                    <img class="gambar-barang" src="{{ asset('img/'. $barang['image-produk']) }}" alt="{{ $barang['nameproduct'] }}">
                                    <h4 class="nama-barang">{{ $barang['nameproduct'] }}</h4>
                                    <h2 class="rarity-barang">{{ $barang['rarityproduk'] }}</h2>
                                    <p class="deskripsi-singkat-barang">{{ $barang['description-singkat-produk'] }}</p>
                                    <p class="harga-barang">{{ $barang['priceproduk'] }}</p>
                                </div>
                            </a>
                        </div>
                @endif

            @endforeach

        </div>

</body>
</html>
