<?php 

include "baglanti.php";

$ad = htmlspecialchars($_GET['ad']);
$soyad = $_GET['soyad'];
filter_input(INPUT_GET, 'soyad', FILTER_SANITIZE_SPECIAL_CHARS);
$sehir = $_GET['sehir'];
filter_input(INPUT_GET, 'sehir', FILTER_SANITIZE_SPECIAL_CHARS);


if (isset($_GET["ekle"])){
    $sql = "INSERT INTO kullanicibilgi (ad, soyad, sehir)
    VALUES ('$ad', '$soyad', '$sehir')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);


}





// INSERT INTO `kullanicibilgi`(`ad`, `soyad`, `SEHİR`) VALUES ('deneme','deneme2','deneme3')
// INSERT INTO `kullanicibilgi`(`ad`, `soyad`, `SEHİR`) VALUES ('deneme'','deneme2','deneme3')





?>