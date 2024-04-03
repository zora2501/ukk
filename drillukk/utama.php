<?php
include 'koneksi.php';
$sql = mysqli_query($conn, "SELECT * FROM account");
$sql_sewa = mysqli_query($conn, "SELECT * FROM data_sewa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sport furia</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>furia sports</h1>
    <table>
        <thead>
            <tr>
                <th>nama pemesan</th>
                <th>no telepon</th>
                <th>tgl pesan</th>
                <th>jam</th>
                <th>durasi sewa</th>
                <th>jumlah pemain</th>
                <th>lapangan</th>
                <th>jenis lapangan</th>
                <th>kostum</th>
                <th>sepatu</th>
                <th>total</th>
                <th>bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($result = mysqli_fetch_assoc($sql_sewa)) { ?>
            <tr>
                <td><?php echo $result ['nama_pemesan']?></td>
                <td><?php echo $result ['no_telepon']?></td>
                <td><?php echo $result ['tgl_pesan']?></td>
                <td><?php echo $result ['jam']?></td>
                <td><?php echo $result ['durasi_sewa']?></td>
                <td><?php echo $result ['jumlah_pemain']?></td>
                <td><?php echo $result ['lapangan']?></td>
                <td><?php echo $result ['jenis_lapangan']?></td>
                <td><?php echo $result ['kostum']?></td>
                <td><?php echo $result ['sepatu']?></td>
                <td><?php echo $result ['total']?></td>
                <td><?php echo $result ['bayar']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <table border='1'>
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody> 
            <tr>
            </tr> 
        </tbody>
    </table>
    <a href="login.html">logout</a>
    <br><br>
    <a href="masukandata.php">booking</a>
    <br><br>
    <a href="">edit</a>
</body>
</html>
