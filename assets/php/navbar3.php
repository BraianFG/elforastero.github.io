 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
<header id="header">
     <h1><a href="index2"><?php echo $negocio['nombre'] ?></a></h1>
     <nav class="main">
         <ul>
              <li class="main">
                <a href="#user" uk-toggle ><i class="fas fa-user"></i></a>
              </li>
                    
             <li class="main">
                 <a href="#menu" uk-toggle ><i class="fas fa-shopping-cart"></i></a>
             </li>
         </ul>
     </nav>
</header>     
 <?php
        }
 ?>
<?php include"panel.php" ?>
<?php include"menu.php" ?>

     <!--- estilos --->
       <?php include "assets/css/main.php" ?> 
