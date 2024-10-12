<?php
class Mahasiswa {
    // Properti
    public $nama;
    public $nim;
    public $jurusan;
    public $semester;

    // Konstruktor
    public function __construct($nama, $nim, $jurusan, $semester) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    // function untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        return "Nama: " . $this->nama . "<br>" .
               "NIM: " . $this->nim . "<br>" .
               "Jurusan: " . $this->jurusan . "<br>" .
               "Semester: " . $this->semester . "<br>";
    }

const AUTHOR = "Faiq0060";
}
?>
