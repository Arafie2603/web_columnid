<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('tambah_produk.tambah')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <label for="foto_produk">Foto_produk</label>
            <input type="file" name="foto_produk" value="">
        </div>
        <div>
            <label for="kode_produk">Kode_produk</label>
            <input type="text" name="kode_produk" value="">
        </div>
        <div>
            <label for="nama_produk">Nama_produk</label>
            <input type="text" name="nama_produk" value="">
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="text" name="harga" value="">
        </div>
        <div>
            <label for="stok">Stok</label>
            <input type="text" name="stok" value="">
        </div>
        <button type="submit">Simpan</button>

    </form>
</body>
</html>
<?php /**PATH C:\Users\arraf\OneDrive\Dokumen\All about back end\PaymentGateway 3\kkp-azaru\resources\views/admin/produk.blade.php ENDPATH**/ ?>