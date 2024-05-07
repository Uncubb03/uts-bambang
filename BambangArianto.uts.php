<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Klasemen Piala Asia U-23</title>
</head>
<body>
    <h2>Input Data Klasemen Piala Asia U-23 Group B</h2>
    <form action="submit.php" method="post">
        <label for="nama_negara">Nama Negara:</label>
        <select name="nama_negara" id="nama_negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br><br>
        <label for="jumlah_pertandingan">Jumlah Pertandingan (P):</label>
        <input type="number" name="jumlah_pertandingan" id="jumlah_pertandingan"><br><br>
        <label for="jumlah_menang">Jumlah Menang (M):</label>
        <input type="number" name="jumlah_menang" id="jumlah_menang"><br><br>
        <label for="jumlah_seri">Jumlah Seri (S):</label>
        <input type="number" name="jumlah_seri" id="jumlah_seri"><br><br>
        <label for="jumlah_kalah">Jumlah Kalah (K):</label>
        <input type="number" name="jumlah_kalah" id="jumlah_kalah"><br><br>
        <label for="jumlah_poin">Jumlah Poin:</label>
        <input type="number" name="jumlah_poin" id="jumlah_poin" readonly><br><br>
        <label for="nama_operator">Nama Operator:</label>
        <input type="text" name="nama_operator" id="nama_operator"><br><br>
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" name="nim" id="nim"><br><br>
        <input type="submit" value="Submit">
    </form>
    <script>
        // Hitung jumlah poin berdasarkan jumlah menang, seri, dan kalah
        document.getElementById("jumlah_pertandingan").addEventListener("input", function() {
            var menang = parseInt(document.getElementById("jumlah_menang").value);
            var seri = parseInt(document.getElementById("jumlah_seri").value);
            var kalah = parseInt(document.getElementById("jumlah_kalah").value);
            var totalPoin = (menang * 3) + seri;
            document.getElementById("jumlah_poin").value = totalPoin;
        });
    </script>
</body>
</html>