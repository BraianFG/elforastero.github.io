<?php 
   require '../../database.php';
  session_start();
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql="DELETE FROM `admin` WHERE `admin`.`id` =  '$id' AND  '$id' > 1 ";
   
     if($id > 1  && $_SESSION["id_admin"] !=1 ){
         header("Location:../../");
        unset($_SESSION["id_admin"]);
     }else{
          header("Location:../../");
     }

    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    }
      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conn);   
?>