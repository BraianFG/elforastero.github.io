 <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
   ?> 
<nav id="header">
            <h1><a href="index"><?php echo $negocio['nombre'] ?></a></h1>
        </nav>
    <?php 
        }
    ?>
    
