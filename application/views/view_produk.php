<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Master Data Produk</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        /* Mengatur gaya untuk header dan data */
        .header, .data {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }

        .header {
            font-weight: bold;
            border-bottom: 3px solid black; /* Garis bawah di header */
        }

        .header div, .data div {
            flex: 1; /* Membuat semua kolom memiliki lebar yang sama */
            text-align: left; /* Rata kiri untuk teks */
            padding: 0 10px; /* Jarak horizontal antara teks dan tepi kolom */
        }

        .header div:first-child, .data div:first-child {
            text-align: center; /* Rata tengah untuk kolom pertama */
            width: 50px; /* Lebar khusus untuk nomor urut */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><center>Data Produk</center></h1>
        
        <!-- Header -->
        <div class="header">
            <div>#</div>
            <div>ID</div>
            <div>Kategori</div>
            <div>Nama Produk</div>
            <div>Satuan</div>
            <div>Harga Beli</div>
            <div>Harga Pokok</div>
            <div>Harga Jual</div>
        </div>

        <!-- Data Produk -->
        <?php
        foreach ($data->result() as $i => $row) {
            ?>
            <div class="data">
                <div><?= ++$i; ?></div>
                <div><?= $row->id_produk; ?></div>
                <div><?= $row->nama_kategori; ?></div>
                <div><?= $row->nama_produk; ?></div>
                <div><?= $row->nama_satuan; ?></div>
                <div><?= number_format($row->harga_beli); ?></div>
                <div><?= number_format($row->harga_pokok); ?></div>
                <div><?= number_format($row->harga_jual); ?></div>
            </div>
            <?php
        }
        ?>
    </div>

    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
