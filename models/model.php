<?php
class EnlacesPaginas
{
    public function enlacesPaginasModel($enlacesModel)
    {
        if($enlacesModel== "inicio" ||  
        
        $enlacesModel== "login" )
        {
            $module="views/modules/".$enlacesModel.".php";
        }
        else if($enlacesModel=="index")
        {
            $module="views/modules/inicio.php";
        }
        else
        {
            $module="views/modules/inicio.php";
        }
        return $module;

    }
}
?>
