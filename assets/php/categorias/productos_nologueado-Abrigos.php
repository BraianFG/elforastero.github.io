
<section class="productos">
<?php 
  $productos = "SELECT * FROM `productos` WHERE `categoria` = 'Abrigos';";
  $resultp1 = mysqli_query($conn,$productos);          

   while($productosp1= mysqli_fetch_array($resultp1)){
       
 ?>   
<?php include 'assets/php/productos/producto_nologueado.php' ?>
<?php include 'assets/php/productos/popup.php' ?>

 <?php 
    }
  ?>
  
 </section> 