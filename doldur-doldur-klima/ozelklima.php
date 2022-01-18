
<?php
    session_start();
    require 'ekle.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Doldur Doldur Klima</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="ozelcss.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>

	 <?php
            require 'header.php';
           ?>


<?php 

 $resimlink = "link";
            $klimabaslik = "formu doldurun";
            $fiyat = "";
            $cartno = "kartnumarasi";
            $btn = "Form Bekleniyor";
            $klimaid = "0";
            ?>



<?php 

       


if (isset($_GET['button'])) {
  if($_GET["bolge"] && $_GET["mekan"] && $_GET["gunes"] && $_GET["yalitim"] && $_GET["yukseklik"] && $_GET["metrekare"] && $_GET["kisisayisi"] && $_GET["aydinlatmagucu"]){
  
  $bolge = $_GET["bolge"];
  $mekan = $_GET["mekan"];
  $gunes = $_GET["gunes"];
  $yalitim = $_GET["yalitim"];
  $yukseklik = $_GET["yukseklik"];
  $metrekare = $_GET["metrekare"];
  $kisi = $_GET["kisisayisi"];
  $aydinlatmagucu = $_GET["aydinlatmagucu"];


  $yedinciadim =0;

  $bolgekatsayisi = 0;

    if ($bolge == "Akdeniz") {
              $bolgekatsayisi = 445;                  
    }else if ($bolge == "Doğu Anadolu") {
         $bolgekatsayisi = 308;
    }else if ($bolge == "Ege") {
         $bolgekatsayisi = 423;
    }else if ($bolge == "Güneydoğu Anadolu") {
         $bolgekatsayisi = 462;
    }else if ($bolge == "İç Anadolu") {
         $bolgekatsayisi = 346;
    }else if ($bolge == "Karadeniz") {
         $bolgekatsayisi = 385;
    }else if ($bolge == "Marmara") {
         $bolgekatsayisi = 385;
    }else{}


    if ($mekan == "Ev") {
        $bolgekatsayisi;
    }else if($mekan == "Büro"){
        $bolgekatsayisi = $bolgekatsayisi+(($bolgekatsayisi*10)/100);
    }else if($mekan == "İş Yeri"){
        $bolgekatsayisi = $bolgekatsayisi+(($bolgekatsayisi*20)/100);
    }else{

    }

    $yuksekliksayisi = $yukseklik;
    $yuksekliksayisi = $yuksekliksayisi*($bolgekatsayisi/3);

    $metrekaresayisi = $metrekare;
    $metrekaresayisi = $metrekaresayisi*$yuksekliksayisi;
    
    

        $kisisayisi = $kisi;
        $kisisayisi = $kisisayisi*600;
        
    
 
       $aydinlatmagucusayisi = $aydinlatmagucu;

     if ($aydinlatmagucusayisi <=500 ) {
       $aydinlatmagucusayisi = 0;
     }else if ($aydinlatmagucusayisi > 500) {
        $aydinlatmagucusayisi = $aydinlatmagucusayisi-500;
         $aydinlatmagucusayisi = $aydinlatmagucusayisi*3.412;
     }else{}


      $yedinciadim = $aydinlatmagucusayisi+$kisisayisi+$metrekaresayisi;

       $gunessayi = 0;
      if ($gunes == "Güneş Alıyor") {
          $yuzdesayi = ($yedinciadim/100)*-10;
          $gunessayi = $yuzdesayi;
      }else if ($gunes == "Güneş Normal") {
          $gunes = $yedinciadim;
      }else if ($gunes == "Güneş Almıyor") {
          $yuzdesayi = ($yedinciadim/100)*10;
          $gunessayi = $yuzdesayi;
      }else{}



      if ($yalitim == "Yalıtım İyi") {
          $yalitimyuzde = ($yedinciadim/100)*-10;
          $yalitimsayi = $yalitimyuzde;
      }else if ($yalitim == "Yalıtım Normal") {
          $yalitim = $yedinciadim;
      }else if ($yalitim == "Yalıtım Kötü") {
          $yalitimyuzde = ($yedinciadim/100)*10;
          $yalitimsayi = $yalitimyuzde;
      }


$onerilecekbtu = 10;
 $btu = $yedinciadim+$gunessayi+$yalitimsayi;
 $onerilecekbtu = $btu/0.8;
 

 
 
    $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$bul = "SELECT * FROM items where $onerilecekbtu<BTU ORDER BY BTU DESC";

$kayit = $con->query($bul);

 

 if ($kayit->num_rows>0) {
     while ($satir = $kayit->fetch_assoc()) {
        
        $degiskenbtu = $satir["BTU"];
        $degiskenname = $satir["name"];
        $degiskenprice = $satir["price"];
        $klimaid = $satir["id"];
            
          

            $klimabaslik = "$degiskenname<br> BTU $degiskenbtu<br>";
            $resimlink = "link";
            $fiyat = "$degiskenprice TL";
            $cartno = "kartnumarasi";
            $btn = "Sepete Ekle";

         

     }
 
}else{

}  














}else{
 echo "<h3>Lütfen Formu Doldurun ve Size En Uygun Klimayı Önerelim</h3>"; 
}
}


?>


  <center>  
<div class="urunumuz">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/baymak2350.jfif" alt="Baymak Elegant Prime 12 A++ 12000 BTU Duvar Tipi Inverter Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4><?php echo "$klimabaslik" ?></h4>
                                    <p><?php echo "$fiyat" ?></p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart($klimaid)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                                
                                                        
                                            }else{
                                                ?>
                                             
                                                 <a href="urun_cart_ekle.php?id=<?php echo $klimaid ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><?php echo $btn ?></a>
                                                 

                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
   </center>



   <center>
           <div class="formdiv">
            <form action="ozelklima.php" method="GET">
  <label for="bolge" class="badge" name="bolge">Bölge</label><br>
  <select class="select" name="bolge">
      <option>Akdeniz</option>
      <option>Doğu Anadolu</option>
      <option>Ege</option>
      <option>Güneydoğu Anadolu</option>
      <option>İç Anadolu</option>
      <option>Karadeniz</option>
      <option>Marmara</option>
  </select><br>
   <label for="mekan" class="badge" name="mekan">Mekan</label><br>
  <select class="select" name="mekan">
      <option>Ev</option>
      <option>Büro</option>
      <option>İş Yeri</option>
  </select><br>
  
    <label for="gunes" class="badge">Güneş Alıyormu?</label><br>
  <select class="select" name="gunes">
      <option>Güneş Alıyor</option>
      <option>Güneş Normal</option>
      <option>Güneş Almıyor</option>
  </select><br>
  <label for="yalitim" class="badge">Yalıtım Durumu</label><br>
  <select class="select" name="yalitim">
    <option>Yalıtım İyi</option>
    <option>Yalıtım Normal</option>
    <option>Yalıtım Kötü</option>
  </select><br>
  <label for="yukseklik" class="badge">Yükseklik</label><br>
  <input placeholder="Örn: 4" class="select" type="text" id="yukseklik" name="yukseklik" value=""><br>
  <label for="metrekare" class="badge">Metrekare</label><br>
  <input placeholder="Örn: 25" class="select" type="text" id="metrekare" name="metrekare" value=""><br>
  <label for="kisisayisi" class="badge">Kişi Sayısı</label><br>
  <input placeholder="Örn: 2" class="select" type="text" id="kisisayisi" name="kisisayisi" value=""><br>
   <label for="aydinlatmagucu" class="badge">Aydınlatma Gücü (W)</label><br>
 <input placeholder="Örn: 400" class="select" type="text" id="aydinlatmagucu" name="aydinlatmagucu" value=""><br>

  <input class="btn btn-primary" type="submit" value="Klimayı Getir" name="button"> 
</form>
</div>
</center>





</body>
</html>