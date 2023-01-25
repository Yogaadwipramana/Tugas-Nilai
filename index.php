<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="index.php">
        <center><b> BIODATAKU </b> </center>
        <label>Nama </label> <br> 
        <input type="text" name="NS"> <br>
        <label>NIS </label> <br> 
        <input type="text" name="NIS"> <br>
        <label>Alamat</label> <br>
        <input type="text" name="AL"> <br>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="TL"> <br>
        <label>Umur</label> <br>
        <input type="number" name="UM"> <br>
        <label>Sekolah</label> <br>
        <input type="text" name="SKLH"> <br>
        <label>Rombel</label> <br>
        <input type="text" name="RMBL"> <br> <br>
        <hr></hr>

        <h2>NILAI</h2>
        <label>Produktif</label> <br>
        <input type="text" name="nilai1"> <br>
        <label>Matematika</label> <br>
        <input type="text" name="nilai2"> <br>
        <label>Bahasa Indonesia</label> <br>
        <input type="text" name="nilai3"> <br>
        <label>Bahasa Inggris</label> <br>
        <input type="text" name="nilai4"> <br>
        <label>Olaharaga</label> <br>
        <input type="text" name="nilai5"> <br>
        <label>Agama</label> <br>
        <input type="text" name="nilai6"> <br>
        <label>Sejarah</label> <br>
        <input type="text" name="nilai7"> <br> <br> 

       <br> <h2>Anggota Kelompok :</h2></br>
        <h4>Yoga Dwi Pramana
        <h4>jesen Marselino
        <h4>Ramadhan Alfajrie
        <h4>Ridho Muhammad Hafizs
        <h4>Fakhri Siddiq</h4>

        <input type="submit" value="KIRIM DAN INPUT NILAI" name="kirim"> <br> <br>
    </form>


        <?php

        if(isset($_POST['kirim']))
        {   
            $nama = $_POST['NS'];
            $nis = $_POST['NIS'];
            $alamat = $_POST['AL'];
            $tanggal = $_POST['TL'];
            $umur = $_POST['UM'];
            $sekolah = $_POST['SKLH'];
            $rombel = $_POST['RMBL'];

            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            $nilai3 = $_POST['nilai3'];
            $nilai4 = $_POST['nilai4'];
            $nilai5 = $_POST['nilai5'];
            $nilai6 = $_POST['nilai6'];
            $nilai7 = $_POST['nilai7'];


            // $jumlah = ($nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7) ;
            // $rata = $jumlah / 7;
            
            // $nilai 	= [$nilai1,$nilai2,$nilai3,$nilai4,$nilai5,$nilai6,$nilai7];
            // $max = max($nilai);
            // $min = min($nilai);
            echo '<b>BIODATA SISWA</b>'.'<br>'.'<br>';
            echo "Nama : ".$nama.'<br>';
            echo "Nis: ".$nis.'<br>';
            echo "Alamat : ".$alamat .'<br>';
            echo "Tanggal Lahir : ".$tanggal.'<br>';
            echo "Umur : ".$umur. '<br>';
            echo "Sekolah : ".$sekolah.'<br>'; 
            echo "Rombel : ".$rombel.'<br>'.'<br>';

            echo '<b>HASIL NILAI</b>'.'<br>'.'<br>';

            echo "Nilai Produktif = " . $nilai1 . '<br>';
            echo "Nilai Matematika = " . $nilai2 . '<br>';
            echo "Nilai Bahasa Indonesia = " . $nilai3 . '<br>';
            echo "Nilai Bahasa Inggris = " . $nilai4 . '<br>';
            echo "Nilai Olaharaga = " . $nilai5 . '<br>';
            echo "Nilai Agama =  " . $nilai6 . '<br>';
            echo "NIlai Sejarah = " . $nilai7 . '<br>'.'<br>';

            // echo "Nilai Tertinggi Adalah = " . " $max ".'<br>';
            // echo "Nilai Terendah Adalah = " . " $min ".'<br>';
            
            // echo "Nilai Rata - Rata Adalah = " . $rata .'<br>'.'<br>';

            // if ($rata >= 90 && $rata <= 100){
            //     echo "Kamu Mendapatkan Grade A ";
            // } 
            // elseif ($rata >= 80 ) {
            //     echo "Kamu Mendapatkan Grade B ";
            // }
            // elseif ($rata >= 70 ) {
            //     echo "Kamu Mendapatkan Grade C ";
            // }
            // elseif ($rata > 100 && $rata < 0) {
            //     echo "NIlai Tidak Valid !!! ";
            // } else {
            //     echo "Anda Tidak Lulus !!! ";
            // }
            
        }   
?>

<?php
$server = mysqli_connect("localhost","root","","db_pplgx");

if($server){
    echo "KONEKSI BERHASIL".'<br>';
}else{
    echo "TIDAK BERHASIL".'<br>';
}


$sql = "INSERT INTO profile_siswa (nama , nis , alamat , tanggal_lahir , umur , sekolah , rombel, produktif, matematika, bindonesia,  binggris, olahraga, agama, sejarah)
value ('$nama' , '$nis' , '$alamat' , '$tanggal' , '$umur' , '$sekolah' , '$rombel', '$nilai1' , '$nilai2' , '$nilai3' , '$nilai4' , '$nilai5' , '$nilai6' , '$nilai7')";


if(mysqli_query($server, $sql )) {
    echo "BERHASIL DIHUBUNGKAN KE DATABASE";
}else{
    echo "GAGAL MENYIMPAN";
}
?>
<hr></hr>


</body>
</html>