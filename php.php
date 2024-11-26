<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">

<label>Nama: </label>
<input type="text" name="nama">

<br><br>

<label>Tanggal Lahir: </label>
<input type="date" name="tgl">

<br><br>

<label>Pekerjaan: </label>
<input type="text" name="pekerjaan">

<br><br>

<label>Gaji: </label>
<input type="number" step="0.01" name="gaji" required>

<br><br>

<input type="submit" value="Kirim">


</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nama = $_POST['nama'];
    $tglLahir = $_POST['tgl'];
    $pekerjaan = $_POST['pekerjaan'];
    $gaji = $_POST['gaji'];
    
    $birthDate = new DateTime($tglLahir);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;

    echo '<h3>Informasi yang Anda Masukkan:</h3>';
    echo 'Selamat Datang, ' . htmlspecialchars($nama) . '<br><br>';
    echo 'Umur: ' . $age . ' tahun<br><br>';
    echo 'Pekerjaan: ' . htmlspecialchars($pekerjaan) . '<br><br>';
    echo 'Gaji: Rp. ' . number_format($gaji, 2, ',', '.') . ' <br><br>';
}

?>
</body>
</html>