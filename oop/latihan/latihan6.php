<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
</head>
<body>
    <fieldset>
        <legend>Peminjaman Buku</legend>
        <form action="" method="post">
        <table>
        <tr>
            <td>Nama Peminjam</td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>

        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td>
                <select name="jenis">
                    <option value="Pilih" required>Pilih</option>
                    <option value="Novel">Novel</option>
                    <option value="Cerpen"> Cerpen</option>
                    <option value="Pengetahuan">Pengetahuan</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="judul" required></td>
        </tr>

        <tr>
            <td>Jumlah Halaman</td>
            <td>:</td>
            <td><input type="text" name="hal"></td>
        </tr>

        <tr>
            <td>Tanggal Peminjaman</td>
            <td>:</td>
            <td><input type="date" name="tglPinjam" required></td>
        </tr>

        <tr>
            <td>Tanggal Pengembalian</td>
            <td>:</td>
            <td><input type="date" name="tglKembali" required></td>
        </tr>

        <tr>
            <td>Tanggal Mengembalikan</td>
            <td>:</td>
            <td><input type="date" name="verifikasi" required></td>
        </tr>

        <tr>
            <td><input type="submit" name = "input" value = "Input"></td>
        </tr>
        </table>
        </form>

<?php

if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $judul = $_POST['judul'];
    $halaman = $_POST['hal'];
    $tglPinjam = $_POST['tglPinjam'];
    $tglKembali = $_POST['tglKembali'];
    $verifikasi = $_POST['verifikasi'];

    $hari = (strtotime($tglKembali) - strtotime($tglPinjam)) / 60 / 60 / 24;
    $telat = (strtotime($verifikasi) - strtotime($tglKembali)) / 60 / 60 / 24;

    class buku{
        public $nama;
        public $jenis;
        public $judul;
        public $halaman;

        public function __construct($nama,$jenis,$judul,$halaman){
            $this->nama = $nama;
            $this->jenis = $jenis;
            $this->judul = $judul;
            $this->halaman = $halaman;
        }

        public function nama(){
            return $this->nama;
        }

        public function peminjaman(){
            if($this->verifikasi >= $this->tglKembali){
                $status = "Anda telat mengembalikan";
            } else{
                $status = "Terimakasih";
            }
            return $status;
        }
    }

    class pinjam extends buku{
        public $tglPinjam;
        public $tglKembali;
        public $verifikasi;
        
        public function minjam($tglPinjam,$tglKembali,$verifikasi){
        $this->tglPinjam = $tglPinjam;
        $this->tglKembali= $tglKembali;
        $this->verifikasi = $verifikasi;
        }

        public function tanggal(){
            return $this->tglPinjam;
        }

        public function kembali(){
            return $this->tglKembali;
        }

        public function Verifikasi(){
            return $this->verifikasi;
        }
    }

    $perpustakaan = new pinjam($nama,$jenis,$judul,$halaman,$tglPinjam,$tglKembali,$verifikasi);

    echo "Nama : ". $perpustakaan->nama(). "<br>";
    echo "Jenis Buku : ". $perpustakaan->jenis. "<br>";
    echo "Judul Buku : ". $perpustakaan->judul. "<br>";
    echo "Jumlah Halaman : ". $perpustakaan->halaman. "<br>";
    echo "Tanggal Pinjam: ". $tglPinjam. "<br>";
    echo "Tanggal Kembali: ". $tglKembali. "<br>";
    echo "Tanggal Verifikasi: ". $verifikasi. "<br>";
    echo "Lama Pinjam : ". $hari. " Hari<br>";
    echo "Telat : ". $telat. " Hari <br>";
}

?>

    </fieldset>
</body>
</html>