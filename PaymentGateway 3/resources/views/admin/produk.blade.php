<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('tambah_produk.tambah') }}" enctype="multipart/form-data">
        <label for="foto_produk">Foto_produk</label>
        <input type="file" value="">
        <button type="submit">Simpan</button>

    </form>
</body>
</html>
