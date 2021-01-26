<?php

include "models/conexion.php";

?>


<!DOCTYPE html>
<?php
  if ($_SESSION['rol'] == 'ADMIN') {
      include "views/modules/nosotrosAD.php";
  }else{
    include "views/modules/nosotrosS.php";
  }
?>