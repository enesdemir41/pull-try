<?php 

session_start(); // Oturumu başlat

include "baglanti.php"; // Veritabanı bağlantısını yap

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]) ;
    $password = htmlspecialchars($_POST["password"]) ;

    // Kullanıcı adı ve şifreyi veritabanındaki bilgilerle karşılaştırın
    $sql = "SELECT * FROM kullanicilar WHERE nickname = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username; // Oturumu başlat
        header("Location: https://www.instagram.com/"); // Başarılı giriş durumunda yönlendirme
    } else {
        echo "Geçersiz kullanıcı adı veya şifre";
    }
}

/* 


 if (mysqli_num_rows($result) == 1)
Bu satır, sorgu sonucunda dönen sonuç kümesinin satır sayısını kontrol eder. 
Eğer sorgu sonucunda yalnızca bir satır eşleşirse, bu demek olur ki 
kullanıcı adı ve şifre veritabanındaki bir kullanıcının bilgileri ile eşleşmektedir ve giriş başarılıdır.

*/


?>