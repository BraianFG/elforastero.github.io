<?php
    include '../database.php';
//------------------------------------------------------------------------------//
    $UsuarioID = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $UsuarioID);

   $sql="DELETE FROM `pedidos` WHERE `pedidos`.`UsuarioID` = $UsuarioID";
   $sql2="DELETE FROM `totalPedido` WHERE `totalPedido`.`UsuarioID` = $UsuarioID";
  
   $resultInsert = mysqli_query($conn, $sql); 
   $resultInsert2 = mysqli_query($conn, $sql2); 
   
   mysqli_close($conn);   
   
 
 ?> 
 