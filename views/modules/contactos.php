<?php
  if ($_SESSION['rol'] == 'ADMIN') {
      include "views/modules/contactosA.php";
  }else{
    include "views/modules/contactosS.php";
  }
?>