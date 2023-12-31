<?php
include __DIR__ . "/conn.php";
if ($_POST) {
    $no_rm = $_POST['no_rm'];
    $id_poli = $_POST['id_poli'];
    $id_jadwal = $_POST['id_jadwal'];
    $keluhan = $_POST['keluhan'];
    $query = ("INSERT INTO daftar_poli(no_rm,id_poli,id_jadwal,keluhan) 
           VALUES ('" . $no_rm . "','" . $id_poli . "','" . $id_jadwal . "','" . $keluhan . "')");
    //echo $no_rm;
    if (!mysqli_query($conn, $query)) {
        die(mysql_error);
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!"); window.location.href="../../app/?page=data_obat"</script>';
    }
}
