<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: application/json');
include 'conexion.php';
$op = $_POST['op'];
if ($op === null) {
    echo "Error";
} else {
    switch ($op) {
        case 'insertUsr':
            header('Content-Type: application/json');
            $cedula = $_POST['CEDULA_USR'];
            $nombre = $_POST['NOMBRE_USR'];
            $apellido = $_POST['APELLIDO_USR'];
            $clave = $_POST['CLAVE_USR'];
            $perfil = $_POST['PERFIL_USR'];
            $sqlInsert = "INSERT INTO usuarios(CEDULA_USR,NOMBRE_USR,APELLIDO_USR,CLAVE_USR,PERFIL_USR) 
                        VALUES ('$cedula','$nombre','$apellido','$clave','$perfil')";
            if ($mysqli->query($sqlInsert) === TRUE) {
                echo json_encode("Se guardo correctamente");
            } else {
                echo "Error..." . $sqlInsert . "<br>" . $mysqli->error;
            }
            $mysqli->close();
            break;


        case 'updateUsr':
            header('Content-Type: application/json');
            $cedula = $_POST['CEDULA_USR'];
            $nombre = $_POST['NOMBRE_USR'];
            $apellido = $_POST['APELLIDO_USR'];
            $clave = $_POST['CLAVE_USR'];
            $perfil = $_POST['PERFIL_USR'];
              $sqlUpdate = "UPDATE usuarios SET NOMBRE_USR = '$nombre', APELLIDO_USR = ' $apellido', CLAVE_USR = '$clave',PERFIL_USR = '$perfil'
                WHERE CEDULA_USR = '$cedula'";
            if ($mysqli->query($sqlUpdate) === TRUE) {
                echo json_encode("Se actualizo correctamente");
            } else {
                echo "Error:" . $sqlUpdate . "<br>" . $mysqli->error;
            }
            $mysqli->close();
            break;

        case 'deleteUsr':
            header('Content-Type: application/json');
            $cedula = $_POST['CEDULA_USR'];
            if (isset($cedula)) {
                $sqlDelete = "DELETE FROM usuarios WHERE CEDULA_USR = $cedula";
                $resultado = $mysqli->query($sqlDelete);
                echo json_encode(array("correcto" => $resultado));
                $mysqli->close();
            }

            break;
    }
}
