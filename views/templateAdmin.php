<html>

<head>
    <title> Proyecto Web </title>
    <meta charset="UTF-8">
    <link rel=StyleSheet href="css/template.css" typr="text/css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/icon.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
</head>

<body>
    <header>
        <h1> UNIVERSIDAD TECNICA DE AMBATO </h1>
        <h2> COMPUTACION VISUAL </h2>
        <div style="  width:100%;text-align:right ;color:black;padding: 5px;font-size: 6.0m;font-weight: bold;">
              <h3 style= >Bienvenido
            <?php
            $usuario = $_SESSION['nombre'];
            echo utf8_decode($usuario)."<br>";
            $perfil = $_SESSION['rol'];
            echo utf8_decode($perfil); 
            ?> </div>
           </h3>
    </header>
    <?php
    include "modules/navigationAdmin.php";
    ?>
    <section>
        <?php
        $mvc = new MvcControllerAdmin();
        $mvc->enlacesPaginasControllerAdmin();
        ?>
    </section>
</body>

</html>