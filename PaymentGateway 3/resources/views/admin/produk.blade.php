<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ url('tambah_produk') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="foto_produk">Foto_produk</label>
            <input type="file" name="foto_produk" value="">
        </div>
        <div>
            <label for="kode_produk">kode_produk</label>
            <input type="text" name="kode_produk" value="">
        </div>
        <div>
            <label for="nama_produk">Nama_produk</label>
            <input type="text" name="nama_produk" value="">
        </div>
        <div>
            <label for="harga">harga</label>
            <input type="text" name="harga" value="">
        </div>
        <div>
            <label for="stok">stok</label>
            <textarea name="stok" id="stok" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Simpan</button>


    </form>
</body>

</html>
