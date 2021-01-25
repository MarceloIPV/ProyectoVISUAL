<?php
include "conexion.php";
$query = "SELECT * FROM usuarios";
if (isset($_POST['CEDULA_USR']) != "") {
    $q = $conn->real_escape_string($_POST['CEDULA_USR']);
    $query = "SELECT * FROM usuarios WHERE CEDULA_USR LIKE '%".$q."%'";
}
$buscarAlumno = $conn->query($query);
$result = array();
if ($buscarAlumno->num_rows > 0) {
    while ($filaAlumno = $buscarAlumno->fetch_assoc()) {
        array_push($result,$filaAlumno);
    }
} else {
    $result = "No se encontraron estudiantes";
}
mysqli_close($conn);
echo json_encode($result);
?>
