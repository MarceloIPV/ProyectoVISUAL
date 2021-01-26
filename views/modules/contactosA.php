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
<form method="POST" novalidatestyle="margin:0;padding:20px 50px" action="http://localhost/ProyectoVISUAL/JasperR/imprimirE.php">  
            <h3>Reporte por sexo del estudiante</h3>
            <div style="margin-bottom:10px">
                <input name="SEXO_EST" class="easyui-textbox" required="true" label="SEXO:" style="width:100%">
                <input type='submit' value='Reportar'>
            </div>
            
</form>
<form method="POST" novalidatestyle="margin:0;padding:20px 50px" action="http://localhost/ProyectoVISUAL/pdf/reportePDF.php"> 
            <h3>Reporte por curso</h3>
            <div style="margin-bottom:10px">
                <input name="EST_CUR" class="easyui-textbox" required="true" label="CURSO:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input type='submit' value='Reportar' >
            </div>
</form>
</body>

</html>