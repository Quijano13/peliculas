<?php
require_once 'vendor/autoload.php';
use Fpdf\Fpdf;
//require('fpdf/fpdf.php');

require 'Procesar.php';

$peliculas = new Procesar();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(193,10,utf8_decode('REPORTE DE PELICULAS AL DÍA '.date('d/m/y')), 0, 1, 'C');
$pdf->ln (10);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,10,utf8_decode('#'), 1, 0, 'C');
$pdf->Cell(25,10,utf8_decode('NOMBRE'), 1, 0, 'C');
$pdf->Cell(35,10,utf8_decode('PROTAGONISTAS'), 1, 0, 'C');
$pdf->Cell(25,10,utf8_decode('GENERO'), 1, 0, 'C');
$pdf->Cell(40,10,utf8_decode('CLASIFICACION'), 1, 0, 'C');
$pdf->Cell(30,10,utf8_decode('DURACION'), 1, 0, 'C');
$pdf->Cell(30,10,utf8_decode('PORTADA'), 1, 1, 'C');
$pelis = $peliculas->leer();
foreach ($pelis as $i => $pel) {
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(8,20, $i+1, 1, 0, 'C');
    $pdf->Cell(25,20,$pel->pelicula, 1, 0, 'C');
    $pdf->Cell(35,20,$pel->protagonistas, 1, 0, 'C');
    $pdf->Cell(25,20,$pel->genero, 1, 0, 'C');
    $pdf->Cell(40,20,$pel->clasificacion, 1, 0, 'C');
    $pdf->Cell(30,20,$pel->duracion, 1, 0, 'C');
    $pdf->Cell(30,20,$pdf->Image(__DIR__.'/imagenes/'.$pel->portada, 177, (43+($i+($i*20))), 22), 1, 1);
}
$pdf->Output('I', 'Reporte_Peluculas.pdf');
?>