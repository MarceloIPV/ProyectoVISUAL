<?php
$alert = "";
if (!empty($_SESSION['active'])) {
    header('location: indexAdmin.php');
} else {
    if (!empty($_POST)) {
        if (empty($_POST['usr']) || empty($_POST['pwd'])) {
            $alert = "ingresar un  usuario y contraseña";
        } else {
            include "models/conexion.php";
            $USR = $_POST['usr'];
            $PWD = $_POST['pwd'];
            $query =  "SELECT * FROM usuarios WHERE CEDULA_USR = '$USR' AND CLAVE_USR='$PWD'";
            $ejecutar = mysqli_query($conn, $query);
            $result = mysqli_num_rows($ejecutar);
            if ($result > 0) {
                $data = mysqli_fetch_array($ejecutar);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] =  $data['CEDULA_USR'];
                $_SESSION['nombre'] =  $data['NOMBRE_USR'];
                $_SESSION['apellido'] =  $data['APELLIDO_USR'];
                $_SESSION['clave'] =  $data['CLAVE_USR'];
                $_SESSION['rol'] =  $data['PERFIL_USR'];
                header('location: indexAdmin.php');
            } else {
                $alert = "contraseña o usuario incorrecto";
                session_destroy();
            }
            mysqli_close($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Dialog - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.10/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.10/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.10/demo.css">
    <script type="text/javascript" src="jquery-easyui-1.9.10/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.10/jquery.easyui.min.js"></script>
</head>
<body>
    <div id="dlg" class="easyui-panel" style="width:400px;padding:50px 60px">
        <div style="margin-bottom:20px;text-align: center;">
            <h1>INICIAR SESION</h1>
        </div>
        <form action="" method="POST">
            <div style="margin-bottom:20px">
                <input type="text" name="usr" class="easyui-textbox" placeholder="Username" style="width:100%;height:34px;padding:10px;">
            </div>
            <div style="margin-bottom:20px">
                <input type="password" class="easyui-textbox" name="pwd" placeholder="Password" style="width:100%;height:34px;padding:10px">
            </div>
            <div class="alert" style="margin-bottom:20px;text-align: center;">
                <?php
                echo isset($alert) ? $alert : "";
                ?>
            </div>
            <div style="text-align: center;">
                <input value="LOGIN" type="submit" class="easyui-linkbutton" style="width:120px;height:34px;padding:10px">
            </div>
        </form>
    </div>
</body>

</html>