<?php
 include '../database.php';
?>
<div id="pedidos" class="uk-container  uk-container-large wrap">
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
              <caption><i class="fas fa-tags"></i>Pedidos</caption>
         <thead>    
             <tr>
                <th>N°</th>
                <th>UsuarioID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Eliminar</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT * FROM `pedidos`" ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['0'] ?></td>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                   <td><?php echo $mostrar_productosp1['2'] ?></td>
                   <td><?php echo $mostrar_productosp1['3'] ?></td>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   <td><?php echo $mostrar_productosp1['6'] ?></td>
                   <td><?php echo '$ ' ,$mostrar_productosp1['7'] ?></td>
                   <td><?php echo $mostrar_productosp1['8'] ?></td>
                   <td><?php echo $mostrar_productosp1['8'] ?></td>
                   <td><a class="button primary" href="#eliminar__carrito_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle><i class="fas fa-trash "></i> Eliminar</a></td>  
              </tr>
            </tbody>
            
  <div id="eliminar__carrito_<?php echo $mostrar_productosp1['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar el pedido de este usuario?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar_pedido()">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>
  <?php
 }
?>  
            </table>
 </div>    
</div>    
           
<script>
    function eliminar_pedido(){
       $.post( "productos/eliminar_pedido.php", { UsuarioID : <?php echo $_SESSION["id"] ?>} );

    }
</script>

