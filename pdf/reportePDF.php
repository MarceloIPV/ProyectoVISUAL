<?php
    
	$mysqli=new mysqli("sql111.epizy.com","epiz_27780605","BT8BcsIKYHKdJRzsxkZ@","epiz_27780605_universidad"); 


	include 'plantillaFPDF.php';
	$curso=$_POST['EST_CUR'];
	$query = "SELECT EST_CED, EST_NOM, EST_APE, EST_DIR, EST_TEL, EST_SEX, EST_CUR FROM estudiantes WHERE EST_CUR='$curso'";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'CEDULA',1,0,'C',1);
	$pdf->Cell(40,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(30,6,'APELLIDO',1,0,'C',1);
    $pdf->Cell(30,6,'DIRRECION',1,0,'C',1);
	$pdf->Cell(30,6,'TELEFONO',1,0,'C',1);
	$pdf->Cell(20,6,'SEXO',1,0,'C',1);
    $pdf->Cell(20,6,'CURSO',1,1,'C',1);
    
	
	$pdf->SetFont('Arial','',10);
    
    if ($resultado = $mysqli->query($query)) {
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['EST_CED']),1,0,'C');
        $pdf->Cell(40,6,utf8_decode($row['EST_NOM']),1,0,'C');
        $pdf->Cell(30,6,utf8_decode($row['EST_APE']),1,0,'C');
        $pdf->Cell(30,6,utf8_decode($row['EST_DIR']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['EST_TEL']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['EST_SEX']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['EST_CUR']),1,1,'C');
	}
}
    $pdf->Output();

?>