<?php 
session_start();
require "database.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
                <?php 
         if(isset($_SESSION['id'])){
            include"assets/php/navbar.php"; 
            
         }else{
            include"assets/php/navbar3.php" ;
            
         }
        ?>
      
       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                      <?php include "assets/php/slider.php" ?>
                
                <!--Productos -->
        <?php
          $buscar = $_GET['buscar'];
          $busqueda = $_SESSION[$buscar];
          if(!empty($buscar)){
        ?>
        <ul class="uk-container uk-container-xlarge"><li class="productos slider"id="slider">
        <?php
        $productosB = "SELECT * FROM productos WHERE `nombre` LIKE '%$buscar%'";
        $resultp1 = mysqli_query($conn, $productosB);
        while ($productosp1 = mysqli_fetch_array($resultp1)) {
         while ($productosp1 = mysqli_fetch_array($resultp1)) {
         if(isset($_SESSION['id'])){
            include"assets/php/productos/producto.php"; 
            include "productos/popup.php";
            
         }else{
            include"assets/php/productos/producto_nologueado.php" ;
            include "productos/popup.php";
             include "productos/reaccionar.php";
         }
         }
        ?>
        <?php
        }?>
              </li>
        </ul>        

    <?php
        }
        ?>
                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
         </div>       

          
        <!-- Hoja de estilo principal -->        
         <?php include 'assets/css/main.php' ?>

         <!--style --> 
  
  <?php  include 'bottom-cache.php' ?>
  
<?php   include 'assets/php/cargar.php' ?>
        
</body>
</html>

