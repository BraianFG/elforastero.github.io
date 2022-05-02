<?php

  $negocio = 'SELECT * FROM negocio_misitio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
 <title><?php echo $negocio['title'] ?></title>
    <!--Repositive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!--Codificación -->
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
   <!--Favicón -->
    <link rel="shortcut icon" href="/images/<?php echo $negocio['favicon']?>" />
    
  <!-- Manifiesto -->    
   <link rel="manifest" href="manifest.json">
    
   <!-- Descripcion -->
    <meta property="og:title" content="<?php echo $negocio['title']?>">
    <meta property="og:image" content="images/<?php echo $negocio['imagen_sitio']?>" />
    <meta property="og:site_name" content="<?php echo $negocio['title']?>">
    <meta property="og:description" content="<?php echo $negocio['descripcion']?>">
     
<?php
  include 'database.php';
  $negocio = 'SELECT * FROM estilos' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?>      
     <meta name="theme-color" content="<?php echo $negocio['color2'] ?>" />
     <meta name="msapplication-navbutton-color" content="<?php echo $negocio['color2'] ?>"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $negocio['color2'] ?>">
    
    
          
      <?php
      }
     ?>
     
                
<?php
    }
 ?>
 