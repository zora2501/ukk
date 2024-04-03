<!DOCTYPE html>
<html>

<head>
    <title>furia sport</title>
</head>

<body>

    <h2>Masukan data</h2>

    <form action="proses.php" method="post">
        <label for="nama_pemesan">Nama pemesan:</label><br>
        <input type="text" id="nama_pemesan" name="nama_pemesan"><br>

        <label for="no_telepon">No telepon:</label><br>
        <input type="number" id="no_telepon" name="no_telepon"><br>

        <label for="tgl_pesan">Tgl pesan:</label><br>
        <input type="date" id="tgl_pesan" name="tgl_pesan"><br>

        <label for="jam">jam:</label><br>
        <input type="time" id="jam" name="jam"><br>

        <label for="durasi_sewa">Durasi sewa:</label><br>
        <input type="number" id="durasi_sewa" name="durasi_sewa"><br>
        
        <label for="Jumlah_pemain">Jumlah pemain:</label><br>
        <select id="jumlah_pemain" name="jumlah_pemain">
            <option value="10">10</option>
            <option value="20">20</option>
        </select><br>

        <label for="lapangan">lapangan:</label><br>
        <select id="lapangan" name="lapangan">
            <option value="INDOOR">INDOOR</option>
            <option value="OUTDOOR">OUTDOOR</option>
        </select><br>

        <label for="jenis_lapangan">Jenis Lapangan:</label><br>
        <select id="jenis_lapangan" name="jenis_lapangan">
            <option value="Reguler">Reguler</option>
            <option value="Matras">Matras</option>
            <option value="Rumput">Rumput</option>
        </select><br>

        <label for="kostum">Kostum:</label><br>
        <input type="number" id="kostum" name="kostum"><br>

        <label for="sepatu">Sepatu:</label><br>
        <input type="number" id="sepatu" name="sepatu"><br>


        <label for="total">Total Biaya:</label><br>
        <input type="number" id="total" name="total"><br>

        <label for="bayar">Bayar:</label><br>
        <input type="number" id="bayar" name="bayar"><br>

        <label for="kembali">Kembali:</label><br>
        <input type="number" id="kembali" name="kembali"><br>

        <input type="submit" value="Submit" name='add'>
        <a href="utama.php">back</a>
    </form>

    <script>
        const prices = {
            'INDOOR': {
                'Reguler': 300000,
                'Matras': 250000,
                'Rumput': 200000
            },
            'OUTDOOR': {
                'Reguler': 250000,
                'Matras': 200000,
                'Rumput': 150000
            }
        }

        const kostumPerJam = 50000;
        const sepatuPerJam = 45000;

        document.getElementById('durasi_sewa').addEventListener('keyup', updateHarga);
        document.getElementById('jumlah_pemain').addEventListener('change', updateHarga);
        document.getElementById('lapangan').addEventListener('change', updateHarga);
        document.getElementById('jenis_lapangan').addEventListener('change', updateHarga);
        document.getElementById('bayar').addEventListener('keyup', updateHarga);
        document.getElementById('kostum').addEventListener('keyup', updateHarga);
        document.getElementById('sepatu').addEventListener('keyup', updateHarga);

        function updateHarga() {
            const durasi = document.getElementById('durasi_sewa').value;
            const jumlahPemain = document.getElementById('jumlah_pemain').value;
            const lapangan = document.getElementById('lapangan').value;
            const jenisLapangan = document.getElementById('jenis_lapangan').value;
            const bayar = document.getElementById('bayar').value;
            const kostum = document.getElementById('kostum').value;
            const sepatu = document.getElementById('sepatu').value;

            const totalHarga = durasi * (prices[lapangan][jenisLapangan] * (jumlahPemain / 10) + (kostum * kostumPerJam) + (sepatu * sepatuPerJam));

            document.getElementById('total').value = totalHarga;
            if (bayar) {
                document.getElementById('kembali').value = bayar - totalHarga;
            }
        }
        </script>
</body>

</html>