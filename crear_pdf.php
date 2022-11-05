<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
function Header()
{
    // Logo
    $this->Image('logo_upla.png',70,4,60);
    $this->Ln(30);

    // Imagen perfil
    $this->Image('img/perfil.jpg',10,30,80);

    //Nombre
    $this->SetFont('Helvetica','u',26);
    $this->Cell(90);
    $this->Cell(1,15,'Nombre Completo',0,0,'L');
    $this->Ln(12);
    $this->SetFont('Helvetica','i',18);
    $this->Cell(91);
    $this->Cell(1,15,'Nombre y Apellido',0,0,'l');
    $this->Ln(25);

    //Rut
    $this->SetFont('Helvetica','u',26);
    $this->Cell(90);
    $this->Cell(0,15,'Rut',0,0,'L');
    $this->Ln(12);
    $this->SetFont('Helvetica','i',18);
    $this->Cell(91);   
    $this->Cell(1,15,'xx.xxx.xxx-x',0,0,'l');
    $this->Ln(35);

    //Fecha de nacimiento 
    $this->SetFont('Helvetica','u',26);
    $this->Cell(1,15,'Fecha de nacimiento',0,0,'L');
    //Genero
    $this->SetFont('Helvetica','u',26);
    $this->Cell(121);
    $this->Cell(1,15,'Genero',0,0,'L');

    //Salto de linea
    $this->Ln(12);

    //Datos
    $this->SetFont('Helvetica','i',18); 
    $this->Cell(1,15,'xxxx/xx/xx',0,0,'l');
    $this->SetFont('Helvetica','i',18);
    $this->Cell(121);   
    $this->Cell(1,15,'genero',0,0,'l');
    $this->Ln(35); 

    //Nacionalidad
    $this->SetFont('Helvetica','u',26);
    $this->Cell(1,15,'Nacionalidad',0,0,'L');
    $this->Ln(12);
    $this->SetFont('Helvetica','i',18); 
    $this->Cell(1,15,'nacionalidad',0,0,'l');
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Output();
?>