<html>

<head>
    <title> Proyecto final </title>
    <meta charset="UTF-8">
    <link rel=StyleSheet href="css/template.css" typr="text/css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/icon.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
</head>

<body>
    <header>
    <h1> COMPUTACION VISUAL </h1>
    <h2> SEGUNDO PARCIAL </h2>
  
    </header>
    <?php
    include "modules/navigation.php";
    ?>
    <section>
        <?php
        $mvc = new MvcController();
        $mvc->enlacesPaginasController();
        ?>
    </section>
</body>

</html>