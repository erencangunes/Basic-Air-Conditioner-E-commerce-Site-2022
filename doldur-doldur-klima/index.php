<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Doldur Doldur Klima</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="./bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        
<style type="text/css">
    
body{
    background-color: #ffffff;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;


}
.cerceve{
   padding-top: 20px;
    width: 80%;
    overflow: hidden;
    border: 4px solid #ffffff;
    box-sizing: border-box;
    border-radius: 40px;
    


}
.galeri{
    padding-top: 20px;
    position: relative;
    width: 400%;
    left: 0;
    animation: 16s slayt infinite;
    border-radius: 40px;
   


}
.galeri img{
     
     padding-top: 20px;
    width: 25%;
    float: left;
   height: 400%;
border-radius: 60px;
}
@keyframes slayt{
    0%{left: 0%;}
    20%{left: 0%;}
    25%{left: -100%;}
    45%{left: -100%;}
    50%{left: -200%;}
    70%{left: -200%;}
    




}






</style>





    </head>


    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Doldur Doldur Klimaya Hoşgeldiniz</h1>
                       <p>Hemen şimdi indirimli ürünlerimizden yararlanın!</p>
                      
                   </div>
                   </center>
               </div>
           </div>
           </div>

    <div class="cerceve">
                <div class="galeri">
                    <img src="slaytresimler/bir.jpg">
                     <img src="slaytresimler/iki.jpg">
                      <img src="slaytresimler/uc.jpg">
                  
                </div>
                  
              </div>

            <br><br> <br><br><br> <br>

           <footer class="footer"> 
               <div class="container">
               <center>
                  <p><a href="index.php">Doldur Doldur Klima</a> Tüm Hakları Saklıdır.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>