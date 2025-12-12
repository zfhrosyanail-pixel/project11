<?php

include "koneksi.php";

// ambil data dan sanitasi
function bersih($data){
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Ambil data dari input form
$xnim           = bersih($_POST['nim'] ?? '');
$xnama          = bersih($_POST['nama'] ?? '');
$xtempatLahir   = bersih($_POST['tempatLahir'] ?? '');
$xtanggalLahir  = bersih($_POST['tanggalLahir'] ?? '');     // sesuai input form

// KONVERSI TANGGAL KE FORMAT MYSQL (Y-m-d)
$xtglLahir      = date("Y-m-d", strtotime($xtanggalLahir));

$xjmlSaudara    = bersih($_POST['jmlSaudara'] ?? '');
$xalamat        = bersih($_POST['alamat'] ?? '');
$xkota          = bersih($_POST['kota'] ?? '');
$xjk            = bersih($_POST['jk'] ?? '');               // L / P
$xstatusKeluarga = bersih($_POST['statusKeluarga'] ?? '');  // K / B

// Hobi (bisa lebih dari satu)
$xhobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "";

$xemail         = bersih($_POST['email'] ?? '');
$xraw_password  = $_POST['password'] ?? ''; // password jangan disanitasi agar tetap valid

// Validasi password minimal 10 karakter
if (empty($xraw_password) || strlen($xraw_password) < 10) {
    die("Password minimal 10 karakter.");
}

// Hash password menggunakan password_hash()
$hashed_password = password_hash($xraw_password, PASSWORD_BCRYPT);

// Query insert
$sql1 = "INSERT INTO mhs (nim, nama, tempatLahir, tanggalLahir, jmlSaudara, alamat, kota, jenisKelamin,
                          statusKeluarga, hobi, email, pass) 
         VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

// Prepare statement
$stmt = $koneksi->prepare($sql1);

$stmt->bind_param(
    "ssssssssssss",
    $xnim,
    $xnama,
    $xtempatLahir,
    $xtglLahir,        // ← sudah benar
    $xjmlSaudara,
    $xalamat,
    $xkota,
    $xjk,
    $xstatusKeluarga,
    $xhobi,
    $xemail,
    $hashed_password
);

// Eksekusi
if ($stmt->execute()) {
    echo "Data berhasil disimpan! <br>";
    echo "<a href='tampilDataMhs.php'>Lihat Data</a>";
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi
$stmt->close();
$koneksi->close();

?>