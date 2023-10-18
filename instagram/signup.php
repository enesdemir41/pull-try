<?php 
 include "baglanti.php";


 $username = htmlspecialchars($_POST['username']);
 $eposta = $_POST['eposta'];
 filter_input(INPUT_POST, 'eposta', FILTER_SANITIZE_SPECIAL_CHARS);
 $password = $_POST['password'];
 filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
 
 if (isset($_POST["submit"])){
    $sql = "INSERT INTO kullanicilar (eposta, nickname, password)
    VALUES ('$eposta', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    
    
    }







?>