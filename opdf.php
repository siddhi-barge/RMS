<?php 
require ('fpdf/fpdf.php');

if(isset($_POST['pdf'])){
	$name=$_POST['name'];
	$pn=$_POST['pn'];
	$date=$_POST['date'];
	$desc=$_POST['desc'];
	$amt=$_POST['amount'];
	$st=$_POST['subtotal'];
	$tax=$_POST['taxable'];
	$total=$_POST['total'];
}

$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();
//cell font, style and size
$pdf->SetFont('Arial','B',14);
//cell width, height, text, border, endline, align
$pdf->cell(130,5,'AVG Sr. Night College',0,0);
$pdf->cell(59,5,'Order Details',0,1);
$pdf->SetFont('Arial','B',8);
$pdf->cell(130,5,'Affiliated to University Mumbai',0,0);
$pdf->cell(59,5,'',0,1);


$pdf->SetFont('Arial','B',12);
$pdf->cell(189,5,'Raghunath Nagar, Next to Mittal Park, Teen Hath Naka, Wagle Estate, Thane(w)-400 604.',0,0);


$pdf->cell(189,10,'',0,1);

$pdf->cell(189,5,'Order of',0,1);

$pdf->cell(10,5,'',0,0);
$pdf->cell(90,5,"name : {$name}",0,1);
$pdf->cell(10,5,'',0,0);

$pdf->cell(10,5,'',0,0);
$pdf->cell(90,5,"phone number : {$pn}",0,1);

$pdf->cell(10,5,'',0,0);
$pdf->cell(90,5,"Date : {$date}",0,1);

$pdf->cell(189,10,'',0,1);

//orders

$pdf->SetFont('Arial','B',12);

$pdf->cell(155,15,'Description',1,0);
$pdf->cell(34,15,'Amount',1,1);

$pdf->SetFont('Arial','',12);

$pdf->cell(155,35,"{$desc}",1,0);
$pdf->cell(34,35,"{$amt}",1,1,'R');

//summary

$pdf->cell(130,10,'',1,0);
$pdf->cell(25,10,'Subtotal',1,0);
$pdf->cell(4,10,'$',1,0);
$pdf->cell(30,10,"{$st}",1,1,'R');

$pdf->cell(130,10,'',1,0);
$pdf->cell(25,10,'Taxable',1,0);
$pdf->cell(4,10,'$',1,0);
$pdf->cell(30,10,"{$tax}",1,1,'R');

$pdf->cell(130,10,'',1,0);
$pdf->cell(25,10,'Total Due',1,0);
$pdf->cell(4,10,'$',1,0);
$pdf->cell(30,10,"{$total}",1,1,'R');


$pdf->Output();
 ?>