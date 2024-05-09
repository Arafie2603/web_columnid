@extends('layout.base')

@section('content')
<main>
    <div>
        <img src="assets/Welcome Photos.png" alt="Welcome Photos">
    </div>
    <section id="best-seller">
        <h2>Best Seller!</h2>
        <div class="products">
            <div class="product">
                @foreach ($data as $item)
                    
                @endforeach
                <img src="{{ "/storage/" . $item->foto_produk }}" width="200" height="200" alt="Aubree Shirt">
                <h3{{ $item->nama_produk }}</h3>
                <p>{{ $item->kode_produk }}</p>
                <p>{{ $item->harga }}</p>
                <button>Tambah ke Keranjang</button>
            </div>
        </div>
    </section>
</main>
@endsection
