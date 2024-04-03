<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql =  mysqli_query($conn, "SELECT username,password FROM account WHERE username = '$username' AND password = '$password'");
    $count = mysqli_num_rows($sql);

    
    if ($count > 0) {
        
        header("Location: utama.php");
        exit;
    } else {

        echo "username atau password salah.silahkan coba lagi";
    }
}

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql =  mysqli_query($conn, "INSERT INTO account(username, password) VALUES ('$username','$password')");

    
    if ($sql) {
        
        header("Location: login.html");
        exit;
    } else { 
        echo "username atau password salah.silahkan coba lagi";
    }
}

if(isset($_POST['add'])) {
    $nama_pemesan = $_POST['nama_pemesan'];
    $no_telepon = $_POST ['no_telepon'];
    $tgl_pesan = $_POST ['tgl_pesan'];
    $jam = $_POST['jam'];
    $durasi_sewa = $_POST['durasi_sewa'];
    $jumlah_pemain = $_POST['jumlah_pemain'];
    $jam = $_POST ['jam'];
    $lapangan = $_POST ['lapangan'];
    $jenis_lapangan = $_POST ['jenis_lapangan'];
    $kostum= $_POST ['kostum'];
    $sepatu= $_POST ['sepatu'];
    $total = $_POST ['total'];
    $bayar = $_POST ['bayar'];
    $kembali= $_POST ['kembali'];
    
    $sql = mysqli_query($conn, "INSERT INTO data_sewa( nama_pemesan, no_telepon, tgl_pesan, jam, durasi_sewa, jumlah_pemain, lapangan, jenis_lapangan, kostum, sepatu, total, bayar, kembali) VALUES ('$nama_pemesan', '$no_telepon', '$tgl_pesan', '$jam', '$durasi_sewa', '$jumlah_pemain', '$lapangan', '$jenis_lapangan', '$kostum', '$sepatu', '$total', '$bayar', '$kembali')");

    header("location: utama.php");
}



