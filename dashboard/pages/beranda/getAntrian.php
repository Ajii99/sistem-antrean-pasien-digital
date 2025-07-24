<?php  
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

    // panggil file config.php untuk koneksi ke database
    require_once "../../../config/config.php";

    $hari_ini = gmdate("Y-m-d", time()+60*60*7);

    // fungsi query untuk menampilkan data dari tabel antrian
    $result = $mysqli->query("SELECT no_antrian, loket FROM antrian WHERE tanggal='$hari_ini' AND status='1' ORDER BY updated_date DESC LIMIT 1")
                              or die('Ada kesalahan pada query tampil nomor antrian: '.$mysqli->error);
    $rows = $result->num_rows;
    if ($rows <> 0) {
        $data       = $result->fetch_assoc();
        $no_antrian = $data['no_antrian']; 
        $loket      = strtoupper($data['loket']);

        if ($loket=='LOKET 1') {
            $btn = 'btn-pink';
            $loket_display = 'PENDAFTARAN 1';
        } elseif ($loket=='LOKET 2') {
            $btn = 'btn-warning';
            $loket_display = 'PENDAFTARAN 2';
        } elseif ($loket=='LOKET 3') {
            $btn = 'btn-danger';
            $loket_display = 'LOKET 3';
        } elseif ($loket=='LOKET 4') {
            $btn = 'btn-info';
            $loket_display = 'LOKET 4';
        }

        echo "  <button class='btn btn-app-antrian $btn'>
                    <div>Antrian</div>
                </button>
                <br><br>
                <button class='btn btn-app-antrian $btn'>
                    <div style='font-size:100px'>$no_antrian</div>
                </button>
                <br><br>
                <button class='btn btn-app-antrian $btn'>
                    <div>$loket_display</div>
                </button>";
    } else {
        echo "  <button class='btn btn-app-antrian btn-purple'>
                    <div>Antrian</div>
                </button>
                <br><br>
                <button class='btn btn-app-antrian btn-purple'>
                    <div style='font-size:100px'> - </div>
                </button>
                <br><br>
                <button class='btn btn-app-antrian btn-purple'>
                    <div> - </div>
                </button>";
    } 
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>
