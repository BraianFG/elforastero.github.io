<div class="mini-post card"  data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>">
       <a href="#<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" uk-toggle class="image"><img id="<?php echo $productosp1['9'] ?>"  src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="images/<?php echo  $productosp1['imagen'] ?>" alt="images/<?php echo  $productosp1['imagen'] ?>" class="card-img-top" alt="<?php echo $productosp1['imagen'] ?>?tr=w-100,h-100" loading="eager"></a>
      <div class="card-body">
        <h3 class="card-title"><?php echo $productosp1['id'], '. '?><?php echo $productosp1['nombre'] ?></h3>
        
    <div class="detalles">  
         <h5 class="card-text " data-precio=<?php echo $productosp1['precio'] ?> ><?php echo '$',$productosp1['precio'] ?></h5>
           <p class="card-text "><?php echo 'Disponible : ', $productosp1['cantidad'] ?></p>
        <p class="card-text "><?php echo 'descripción : ', $productosp1['descripcion'] ?></p>
   </div>  

        <ul class="mini-post_lista">
         <?php include 'botones.php'?>
        </ul> 
      </div>
    </div>
    