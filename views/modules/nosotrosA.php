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
    <?php
    include "../../models/conexion.php";
        $cedula="";
        $APE_EST = $_POST['APE_EST'];

        $query="SELECT * FROM estudiantes where EST_APE = '$APE_EST' ";
        if(isset($_POST['CED_EST'])!= ""){
            $q=$conn->real_escape_string($_POST['CED_EST']);
            $query="SELECT * FROM estudiantes WHERE EST_EST LIKE '%".$q."%'";
        }
        $resultado = mysqli_query($conn, $query);
        ?>

    <div style="margin:20px 0;">

        <form id="formBuscar" method="post" novalidate style="margin:20px;padding:20px 50px" action="">
           
            <h3>INGRESE EL APELLIDO DEL ESTUDIANTE</h3>


            <div>
            <input id="APE_EST" name="APE_EST" class="easyui-textbox" required="true" style="width:50%" >
            <h3></h3>
            </div>
    
            <div>
            <input type="submit" name="buscar" class="easyui-linkbutton"  value="Buscar" style="width:90px" onclick="$('#w').window('open')">
            


            <table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px"
            
            url= ""; 
            
            rownumbers="true" fitColumns="true" singleSelect="true">
             <thead>


            <tr>
                <th field="CED_EST" width="50">CEDULA</th>
                <th field="NOM_EST" width="50">NOMBRE</th>
                <th field="APE_EST" width="50">APELLIDO</th>
                <th field="DIR_EST" width="50">DIRECCION</th>
                <th field="TEL_EST" width="50">TELEFONO</th>
                <th field="SEXO_EST" width="50">SEXO</th>
                <th field="CUR_EST" width="50">CURSO</th>
                
                
                

            </tr>

            <tbody>
            <?php 
                while ($filas = mysqli_fetch_assoc($resultado)) 
                {
             ?>
            <tr>
                <td><?php echo $filas["EST_CED"]?></td>
                <td><?php echo $filas["EST_NOM"]?></td>
                <td><?php echo $filas["EST_APE"]?></td>
                <td><?php echo $filas["EST_DIR"]?></td>
                <td><?php echo $filas["EST_TEL"]?></td>
                <td><?php echo $filas["EST_SEX"]?></td>
                <td><?php echo $filas["EST_CUR"]?></td>
            </tr>
            <?php 
                }
             ?>
        </tbody>

            
        </thead>
    </table>
           
       
           

            
           

          

        </form>

        

        

    </div>

</body>

</html>

