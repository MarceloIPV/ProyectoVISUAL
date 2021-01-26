<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("PHPJasperXML.inc.php");
include_once ('setting.php');


$sexo=$_POST['SEXO_EST'];
$PHPJasperXML = new PHPJasperXML();
if($sexo == 'femenino')
{
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array("parameter1"=>1);
$PHPJasperXML->load_xml_file("ReporteEstudiante.jrxml");
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
//$PHPJasperXML->outpage("I"); 
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
}else if($sexo == "masculino"){
 //$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array("parameter1"=>1);
$PHPJasperXML->load_xml_file("ReporteEstudiante2.jrxml");
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
//$PHPJasperXML->outpage("I"); 
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
}




?>