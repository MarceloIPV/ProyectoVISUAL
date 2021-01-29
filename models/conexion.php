<?php

$servername="sql111.epizy.com";
$username="epiz_27780605";
$password="BT8BcsIKYHKdJRzsxkZ@";
$dbname="epiz_27780605_universidad";
$conn= mysqli_connect($servername,$username,$password,$dbname);
$mysqli = new mysqli($servername,$username,$password,$dbname);
if(!$mysqli)
{
    die("Error en la conexion".mysqli_connect_error());
}
function utf8_converter($array)
{
    array_walk_recursive($array, function(&$item) {
        $item =utf8_encode($item);
    });
    return json_encode($array);
}

?>