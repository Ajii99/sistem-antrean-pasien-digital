<?php  
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // Panggil file config.php untuk koneksi ke database
    require_once "../../../config/config.php";

    // Ambil tanggal hari ini (diasumsikan GMT+7)
    $hari_ini = gmdate("Y-m-d", time()+60*60*7);

    // Query untuk mengambil jumlah antrian pada tanggal hari ini
    $result = $mysqli->query("SELECT count(ID) as jumlah FROM antrian WHERE tanggal='$hari_ini'")
                          or die('Error: ' . $mysqli->error);

    // Ambil hasil query
    if ($result) {
        $data = $result->fetch_assoc();
        $jumlah_antrian = $data['jumlah'];

        // Mengembalikan jumlah antrian dengan format "Antrian: "
        echo "Antrian: " . number_format($jumlah_antrian);
    } else {
        // Handle error jika query gagal
        echo 'Antrian: 0'; // Atau sesuaikan dengan respons yang sesuai untuk aplikasi Anda
    }
} else {
    // Jika bukan request AJAX, redirect atau beri respons error
    echo '<script>window.location="../../error-404.html"</script>';
}
?>
