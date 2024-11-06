<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Master Data Satuan Barang</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        .header, .data {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }

        .header {
            font-weight: bold;
            border-bottom: 3px solid black;
        }

        .header div, .data div {
            padding: 0 15px; 
        }

        .header div:first-child, .data div:first-child {
            text-align: center;
            width: 50px; 
        }
        
        .header div:nth-child(2), .data div:nth-child(2) {
            width: 80px; 
        }

        .header div:nth-child(3), .data div:nth-child(3) {
            flex: 2; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><center>Data Satuan Barang</center></h1>

        
        <div class="header">
            <div>#</div>
            <div>ID</div>
            <div>Nama Satuan</div>
        </div>

        
        <?php
        foreach ($data->result() as $i => $row) {
            ?>
            <div class="data">
                <div><?= ++$i; ?></div>
                <div><?= $row->id_satuan; ?></div>
                <div><?= $row->nama_satuan; ?></div>
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
