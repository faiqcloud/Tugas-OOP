<?php
//include kelas mahasiswa.php
require_once 'Mahasiswa.php';

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("faiq", "23.240.0060", "Informatika", 3);

// Menggunakan method tampilkanInfo
echo $mahasiswa1->tampilkanInfo();
echo "<br>";
// Menampilkan constan
echo Mahasiswa:: AUTHOR;
?>