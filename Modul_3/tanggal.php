<html>
<head>
    <title> Fungsi Tanggal dan Waktu </title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:i A");
    $waktu=date("d-m-Y");
    $hari=date("1");
    $tanggal=date("d");
    $bulan=date("F");
    $tahun=date("Y");
    echo "Sekarang Jam $jam</br>";
    echo "Sekarang Tanggal $waktu</br>";
    echo "Lebih detailnya hari $hari Tanggal $tanggal Bulan $bulan
    Tahun $tahun</br>";
    ?>
</body>
</html>