<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>input data mahasiswa</title>
</head>
<body> 
<h2>form input mahasiswa</h2>
<form action="simpanDataMhs.php" method="POST">
    NIM: <input type="text" name="nim" required><br><br>
    Nama: <input type="text" name="nama" required><br><br>
    Tempat Lahir: <input type="textarea" name="tempatLahir" required><br><br>
    Tanggal Lahir: <input type="date" name="tanggalLahir" required><br><br>
    Jumlah Saudara: <input type="number" name="jmlSaudara" required><br><br>
    Alamat:<br>
        <textarea rows="5" cols="50" name="alamat"></textarea><br/>
    Kota:
    <select name="kota">
        <option>Semarang</option>
        <option>Solo</option>
        <option>Brebes</option>
        <option>Kudus</option>
        <option>Demak</option>
        <option>Salatiga</option>
    </select>
    <br><br>
    Jenis Kelamin:
    <input type="radio" name="jk" value="L" required> Laki-laki>
    <input type="radio" name="jk" value="p" required> perempuan>
    <br><br>
    Status:
    <input type="radio" name="statusKeluarga" value="K" required> Kawin
    <input type="radio" name="statusKeluarga" value="B" required> Belum Kawin
    <br><br>
    Hobi (boleh lebis dari satu)
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br>
    <input type="checkbox" name="hobi[]" value="Musik"> Musik <br>
    <input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="password" name="password" required>
    <input type="submit" value="simpan">
</form>

</body>
</html>