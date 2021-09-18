<?php
if (isset($_POST['Input'])) {
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $agama = $_POST['Agama'];
 $pilih = $_POST['Golongan'];
 $jumlahjam = $_POST['Jam'];
 $jamLembur = 0;
 $gajiLembur = 0;
 $totalpajak = 0;

 $jamLembur = $jumlahjam - 173;

 for($i = 0; $i<=$jamLembur; $i++){
     $gajiLembur = $jamLembur * 20000;
 }

 if($pilih == 1){
     $gajipokok = 1500000;
     $tunjangan = 150000;
 }else if($pilih == 2){
    $gajipokok = 2000000;
    $tunjangan = 200000;
 }else if($pilih == 3){
    $gajipokok = 2500000;
    $tunjangan = 250000;
 } else if($pilih == 4){
    $gajipokok = 3000000;
    $tunjangan = 300000;
}
$pajakGP = $gajipokok * 0.05;
$pajakGL = $gajiLembur * 0.05;

$totalpajak = $pajakGL + $pajakGP;
$totalgaji = ($gajipokok + $gajiLembur + $tunjangan) - ($pajakGP + $pajakGL);


echo "Nama = $nama<br>";
echo "Jenis Kelamin = $jk<br>";
echo "Agama = $agama<br>";
echo "Golongan = $pilih<br>";
echo "Jumlah Jam Kerja = $jumlahjam<br>";
echo "Jumlah Jam Lembur = $jamLembur<br>";
echo "Gaji Pokok = $gajipokok<br>";
echo "Gaji Lembur = $gajiLembur<br>";
echo "Pajak Gaji Pokok = $pajakGP<br>";
echo "Pajak Lembur = $pajakGL<br>";
echo "Total Pajak = $totalpajak<br>";
echo "Tunjangan Pengabdian = $tunjangan<br>";
echo "Gaji Diterima = $totalgaji<br>";

}
?>