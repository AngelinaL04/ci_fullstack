<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Master Data Kategori Barang</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <style>
        /* Mengatur gaya untuk header dan data */
        .header, .data {
            display: flex;
            justify-content: space-between;
            padding: 10px 0; /* Jarak vertikal */
        }

        .header {
            font-weight: bold;
            border-bottom: 3px solid black; /* Garis bawah di header */
        }

        .header div, .data div {
            padding: 0 15px; /* Jarak horizontal antara teks dan tepi kolom */
        }

        .header div:first-child, .data div:first-child {
            text-align: center; /* Rata tengah untuk kolom pertama */
            width: 50px; /* Lebar khusus untuk nomor urut */
        }

        /* Mengatur lebar untuk kolom ID dan Nama Kategori */
        .header div:nth-child(2), .data div:nth-child(2) {
            width: 80px; /* Lebar khusus untuk ID */
        }

        .header div:nth-child(3), .data div:nth-child(3) {
            flex: 2; /* Membuat kolom Nama Kategori lebih lebar */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><center>Data Kategori Barang</center></h1>

        <!-- Header -->
        <div class="header">
            <div>#</div>
            <div>ID</div>
            <div>Nama Kategori</div>
        </div>

        <!-- Data Kategori -->
        <?php
        foreach ($data->result() as $i => $row) {
            ?>
            <div class="data">
                <div><?= ++$i; ?></div>
                <div><?= $row->id_kategori; ?></div>
                <div><?= $row->nama_kategori; ?></div>
            </div>
            <?php
        }
        ?>
    </div>

    <!-- load jquery js file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
