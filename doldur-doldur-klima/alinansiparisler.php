<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alınan Siparişler</title>
	 <?php
            require 'header.php';
           ?>
             <link rel="shortcut icon" href="img/lifestyleStore.png" />
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="alinansiparislercss.css" type="text/css">
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        
</head>
<body>
<h1 class="h1">Alınan Siparişler</h1>


<?php 


$asveritabani=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$getiras = "SELECT * FROM users_items where status = 'Confirmed'";

$as = $asveritabani->query($getiras);

 
 if ($as->num_rows>0) {
     while ($verisatiras = $as->fetch_assoc()) {
        
        $user_idas = $verisatiras["user_id"];
        $item_idas = $verisatiras["item_id"];
        $statusas = $verisatiras["status"];



$kveritabani=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$kgetir = "SELECT * FROM users where id = $user_idas ";

$k = $kveritabani->query($kgetir);

 
 if ($k->num_rows>0) {
     while ($kk = $k->fetch_assoc()) {
        
       $user_namek = $kk["name"];
       $user_emailk = $kk["email"];
       $user_telefonk = $kk["contact"];
       $user_sehirk = $kk["city"];
       $user_adresk = $kk["address"];




$uveritabani=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$ugetir = "SELECT * FROM items where id = $item_idas ";

$u = $uveritabani->query($ugetir);

 
 if ($u->num_rows>0) {
     while ($uu = $u->fetch_assoc()) {
        
     $urunadi = $uu["name"];
     $urunfiyat = $uu["price"];


}
}




}
}


echo "
                 <div id='dis_bolme'
                 <div class='ic_bolme'
                 <p> <img class='resim' src='urunplaceholder.png'/><br><br>
                 
                  Ürün Adı: $urunadi<br>
                  Ürün Fiyat: $urunfiyat<br>
                  Alıcı Adı: $user_namek<br>
                  Alıcı Email: $user_emailk<br>
                  Alıcı Telefon: $user_telefonk<br>
                  Alıcı Şehir: $user_sehirk<br>
                  Alıcı Adres: $user_adresk<br>
                 
                 
                 
              </p>
              </div>
               </div>
              ";


        }
    } else {
        echo "<h2>Henüz Bir Sipariş Yok</h2>";
    }
        
?>





</body>
</html>