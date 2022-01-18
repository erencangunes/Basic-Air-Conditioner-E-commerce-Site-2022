<?php
    session_start();
    require 'baglanti.php';
    if(!isset($_SESSION['email'])){
        header('location: giris.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id' && status='Added to cart'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);

    $sum=0;
    if($no_of_user_products==0){
         
    ?>
    
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
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
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Ürün Numarası</th><th>Ürün Adı</th><th>Fiyatı</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_sil.php?id=<?php echo $row['id'] ?>'>Sil</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            
                            <th></th><th>Toplam Fiyat</th><th> <?php echo $sum;?></th><th><a href="basarili.php?id=<?php echo $user_id?>" class="btn btn-primary"> Siparişi Tamamla</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br>

<?php
 $user_id=$_SESSION['id'];
    $user_products_queryq="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id' && status='Confirmed'";
    $user_products_resultq=mysqli_query($con,$user_products_queryq) or die(mysqli_error($con));
    $no_of_user_productsq= mysqli_num_rows($user_products_resultq);

    $sumq=0;
    if($no_of_user_productsq==0){
         
    ?>
     
    <?php
    }else{
        while($rowq=mysqli_fetch_array($user_products_resultq)){
            $sumq=$sumq+$rowq['price']; 
       }
    }


?>




 <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Satın Alınan Ürün Numarası</th><th>Satın Alınan Ürün</th><th>Ödenen Fiyat</th><th></th>
                        </tr>
                       <?php 
                        $user_products_resultq=mysqli_query($con,$user_products_queryq) or die(mysqli_error($con));
                        $no_of_user_productsq= mysqli_num_rows($user_products_resultq);
                        $counterq=1;
                       while($rowq=mysqli_fetch_array($user_products_resultq)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counterq ?></th><th><?php echo $rowq['name']?></th><th><?php echo $rowq['price']?></th>
                            <th><a href='cart_sil.php?id=<?php echo $rowq['id'] ?>'>İptal Et</a></th>
                        </tr>
                       <?php $counterq=$counterq+1;}?>
                       
                    </tbody>
                </table>
            </div>


            
          
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
