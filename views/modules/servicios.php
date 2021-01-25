<?php
  if ($_SESSION['rol'] == 'ADMIN') {
      include "views/modules/serviciosU.php";
  }else{
    include "views/modules/serviciosS.php";
  }
  ?>