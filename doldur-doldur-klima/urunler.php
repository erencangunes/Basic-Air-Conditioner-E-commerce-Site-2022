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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h2>Tüm Ürünler</h2>
                    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/mitsubishi10000.jpg" alt="Mitsubishi SRK50ZS-W Inverter Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Mitsubishi SRK50ZS-W Inverter Duvar Tipi Klima</h4>
                                    <p>15.000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/baymak2350.jfif" alt="Baymak Elegant Prime 12 A++ 12000 BTU Duvar Tipi Inverter Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Baymak Elegant Prime 12 A++ 12000 BTU Duvar Tipi Inverter Klima</h4>
                                    <p>8.000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/bosch6700.jpg" alt="Bosch B1ZMX12409 Duvar Tipi Inverter Klima 12.000 BTU A++ 1W">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Bosch B1ZMX12409 Duvar Tipi Inverter Klima 18.000 BTU A++ 1W</h4>
                                    <p>10.000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/daikin8000.jfif" alt="Daikin Shira Plus FTXM50M Limited Edition 18000 BTU/h Inverter Split Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Daikin Shira Plus FTXM50M Limited Edition 18000 BTU/h Inverter Split Duvar Tipi Klima</h4>
                                    <p>20.000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/kaira3000.jfif" alt="Kaira DTXR35E 12000 BTU WiFi A++ Inverter Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Kaira DTXR35E 12000 BTU WiFi A++ Inverter Duvar Tipi Klima</h4>
                                    <p>7000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/lg3500.jpg" alt="LG Dual Cool S18ETK S3-W18KL2BA A++ 18000 BTU Inverter Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>LG Dual Cool S18ETK S3-W18KL2BA A++ 24000 BTU Inverter Duvar Tipi Klima</h4>
                                    <p>9.500 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/lg8400.jfif" alt="LG Dual Cool S12ETK S3-W12JA2AA A++ 12000 BTU Duvar Tipi Inverter Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>LG Dual Cool S12ETK S3-W12JA2AA A++ 18000 BTU Duvar Tipi Inverter Klima</h4>
                                    <p>7.500 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/mitsubishi4000.jfif" alt="Mitsubishi Heavy SRK25ZSP-W 9.000 Btu/h Inverter Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Mitsubishi Heavy BTU SRK25ZSP-W 12000 Btu/h Inverter Duvar Tipi Klima</h4>
                                    <p>8.000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/mitsubishi7500.jpg" alt="Mitsubishi Heavy SRK35ZSP-WS Silver Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Mitsubishi Heavy SRK35ZSP-WS 9000 BTU Silver Duvar Tipi Klima</h4>
                                    <p>10.200 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/mitsubishiheavy5000.jfif" alt="Mitsubishi Heavy SRK35ZSP-WS Silver Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Mitsubishi Heavy SRK35ZSP-WS 18000 BTU Silver Duvar Tipi Klima</h4>
                                    <p>9000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/vessen2890.jpg" alt="Vessen VTXN25B 9000 BTU Dc A++ Duvar Tipi Inverter Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Vessen VTXN25B 9000 BTU Dc A++ Duvar Tipi İnverter Klima</h4>
                                    <p>5.500 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="uruncart.php">
                                <img src="klimaresimler/veste4800.jpg" alt="Vestel Flora Doğa Inverter 242 A++ WIFI 24000 BTU Duvar Tipi Klima">
                            </a>
                            <center>
                                <div class="caption">
                                    <h4>Vestel Flora Doğa Inverter 242 A++ WIFI 24000 BTU Duvar Tipi Klima</h4>
                                    <p>11.000 TL</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="giris.php" role="button" class="btn btn-primary btn-block">Şimdi Satın Al</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Sepete Eklendi</a>';
                                            }else{
                                                ?>
                                                <a href="urun_cart_ekle.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Sepete Ekle</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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
