<?php
 include "models/conexion.php";
 $ejecutar = mysqli_query($conn, "SELECT * FROM curso");
 while ($valores = mysqli_fetch_array($ejecutar)) {
     echo '<option value="' . $valores['CUR_ID'] . '">' . $valores['CUR_ID'] . '</option>';
 }
 mysqli_close($conn);
 ?>