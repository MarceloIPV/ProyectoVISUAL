<?php
    $servername="sql113epizycom";
    $username="epiz_26498194";
    $password="Y9Jk9[pzg^a]L3t";
    $dbname="epiz_26498194_universidad";
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