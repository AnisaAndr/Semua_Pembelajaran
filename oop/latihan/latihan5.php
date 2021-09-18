<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inheritance</title>
  </head>
  <body>
    <fieldset>
      <legend>Kuliah</legend>
      <form action="" method="post">
        <table>

          <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
          </tr>

          <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" required></td>
          </tr>

          <tr>
            <td>Nilai</td>
            <td>:</td>
            <td><input type="number" min="1" max="100" name="nilai" required></td> 
          </tr>

          <tr>
            <td>Nama Dosen</td>
            <td>:</td>
            <td><input type="text" name="dosen" required></td>
          </tr>

          <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name="matkul" required></td>
          </tr>

          <tr>
            <td><input type = "submit" name="input" value = "Input"></td>
          </tr>

        </table>
      </form>
    <?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class Mahasiswa{
        public $nim;
        private $nama;
        protected $nilai;

        public function __construct($nim, $nama, $nilai){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->nilai = $nilai;
        }

        public function Mahasiswa(){
            return $this->nama;
        }

        public function Status(){
            if ($this->nilai >= 75) {
                $status = "Lulus";
            } else if ($this->nilai >= 65) {
                $status = "Perbaikan";
            } else {
                $status = "Tidak Lulus";
            }
            return $status;
        }
    }

    class Matkul extends Mahasiswa{
        public $matkul;
        public $dosen;
        public $status;

        public function Matkul($matkul, $dosen){
            $this->matkul = $matkul;
            $this->dosen = $dosen;
        }

        public function Nilai(){
            return $this->nilai;
        }

        public function Grade(){
            if ($this->nilai >= 85) {
                $grade = "A";
            } elseif ($this->nilai >= 75) {
                $grade = "B";
            } elseif ($this->nilai >= 65) {
                $grade = "C";
            } else {
                $grade = "D";
            }
            return $grade;
        }
    }

    $data = new Matkul($nim, $nama, $nilai);
    $data->Matkul($matkul, $dosen);
    echo "Nama : " . $data->Mahasiswa() . "<br>";
    echo "NIM : " . $data->nim . "<br>";
    echo "Mata Kuliah : " . $data->matkul . "<br>";
    echo "Dosen : " . $data->dosen . "<br>";
    echo "Nilai : " . $data->Nilai() . "<br>";
    echo "Grade : " . $data->Grade() . "<br>";
    echo "Status : " . $data->Status() . "<br>";
}
?>
    </fieldset>
  </body>
</html>