<li class="productos slide2 slide2ver"id="slide2"><?php
require '../../../database.php';
$productos =
    "SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` LIMIT 20 OFFSET 20;";
$resultp1 = mysqli_query($conn, $productos);
while ($productosp1 = mysqli_fetch_array($resultp1)) {
    include "../productos/producto_nologueado.php";
    include "../productos/popup.php";
    include "../productos/reaccionar.php";
}
?></li>