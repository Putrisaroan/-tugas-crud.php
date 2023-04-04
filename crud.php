<?php

$conn = mysqli_connect('localhost', 'n1577759_kristina', 'latihanphp123', 'n1577759_kristina');


if(isset($_POST['tambahdata'])) {
    $NamaSertifikasi    =$_POST['namasertifikasi'];
    $LembagaSertifikasi =$_POST['lembagasertifikasi'];
    $TanggalDiterbitkan =$_POST['tanggalditerbitkan'];
    $MasaBerlaku        =$_POST['masaberlaku'];
    $mysql = "INSERT INTO sertifikasi (ID, NAMASERTIFIKASI, LEMBAGASERTIFIKASI, TANGGALSERTIFIKASI, MASABERLAKU) VALUES ('', ' $NamaSertifikasi', '$LembagaSertifikasi', '$TanggalDiterbitkan', '$MasaBerlaku')";
    mysqli_query($conn, $mysql);
    header("location: index.php");
}

$AmbilData = mysqli_query($conn, "SELECT * FROM sertifikasi");

if(isset($_POST['ubahdata'])) {
    $ID                    = $_POST['id'];
    $NamaSertifikasi       = $_POST['namasertifikasi'];
    $LembagaSertifikasi    = $_POST['lembagasertifikasi'];
    $TanggalDiterbitkan    = $_POST['tanggalditerbitkan'];
    $MasaBerlaku           = $_POST['masaberlaku'];
    $mysql = "UPDATE sertifikasi SET NAMASERTIFIKASI='$NamaSertifikasi', LEMBAGASERTIFIKASI='$LembagaSertifikasi', TANGGALSERTIFIKASI='$TanggalDiterbitkan', MASABERLAKU='$MasaBerlaku' WHERE ID=$ID";
    mysqli_query($conn, $mysql);
    header('location: index.php');
}

if (isset($_POST['hapus'])) {
    $ID = $_POST['id'];
    $query = "DELETE FROM sertifikasi WHERE ID = '$ID'";
    $result = mysqli_query($conn, $query);
    header('location: index.php');
}

















?>

