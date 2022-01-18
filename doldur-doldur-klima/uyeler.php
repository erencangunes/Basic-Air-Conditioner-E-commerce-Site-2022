<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Üyeler</title>
	 <?php
            require 'header.php';
           ?>
            <link rel="shortcut icon" href="img/lifestyleStore.png" />
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="uyelercss.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<h1 class="h1">Üyeler</h1>
<?php 

$uyeveritabani=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$getir = "SELECT * FROM users where email != 'admin@gmail.com'";

$uyekayit = $uyeveritabani->query($getir);

 

 if ($uyekayit->num_rows>0) {
     while ($verisatir = $uyekayit->fetch_assoc()) {
        
        $kullaniciid = $verisatir["id"];
        $kullaniciname = $verisatir["name"];
        $kullaniciemail = $verisatir["email"];
        $kullanicitelefon = $verisatir["contact"];
        $kullanicisehir = $verisatir["city"];
        $kullaniciadres = $verisatir["address"];

echo "
                 <div id='dis_bolme'
                 <div class='ic_bolme'
                 <p> <img class='resim' src='placeholder.jfif'/><br><br>
                 Kullanıcı id: $kullaniciid<br>
                  Kullanıcı Adı: $kullaniciname<br>
                  Kullanıcı Email: $kullaniciemail<br>
                  Kullanıcı Telefon: $kullanicitelefon<br>
                  Kullanıcı Şehir: $kullanicisehir<br>
                  Kullanici Adres: $kullaniciadres<br>
              </p>
              </div>
               </div>
              ";


        }
    }else {
      echo "<h2>Henüz Bir Üye Yok</h2>";
    }
        
?>



</body>
</html>