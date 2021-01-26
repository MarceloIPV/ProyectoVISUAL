<?php

include "models/conexion.php";

?>


<!DOCTYPE html>
<?php
  if ($_SESSION['rol'] == 'ADMIN') {
      include "nosotrosA.php";
  }else{
    include "nosotrosS.php";
  }
?>