
<?php 
error_reporting(0);

require 'baglanti.php';
session_start();

$user_id= $_SESSION['id'];

?>



<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                      <a class="logoclass" href="index.php"><img id="logo" src="img/logo.jpg"></a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email']) && $user_id != 1 ){
                           ?>
                           <li><a href="index.php"><span class=""></span> Anasayfa</a></li>
                           <li><a href="urunler.php"><span class=""></span> Ürünler</a></li>
                            <li><a href="ozelklima.php"><span class=""></span> Size Özel Klima</a></li>
                           <li><a href="uruncart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Sepetim / Siparişlerim</a></li>
                           <li><a href="ayarlar.php"><span class="glyphicon glyphicon-cog"></span> Ayarlar</a></li>
                            
                           <li><a href="cikis.php"><span class="glyphicon glyphicon-log-out"></span> Çıkış Yap</a></li>
                              

                               <?php
                           }
                            else if(isset($_SESSION['email']) && $user_id = 1 ){
                           ?>
                           <li><a href="index.php"><span class=""></span> Anasayfa</a></li>
                            <li><a href="uyeler.php"><span class=""></span>Üyeler</a></li>
                            <li><a href="alinansiparisler.php"><span class=""></span>Alınan Siparişler</a></li>
                           <li><a href="cikis.php"><span class="glyphicon glyphicon-log-out"></span> Çıkış Yap</a></li>


                           <?php
                           }else{
                            ?>
                            <li><a href="uye_ol.php"><span class="glyphicon glyphicon-user"></span> Kayıt Ol</a></li>
                           <li><a href="giris.php"><span class="glyphicon glyphicon-log-in"></span> Giriş Yap</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>