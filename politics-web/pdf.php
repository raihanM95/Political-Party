<?php
//include connection file
include_once("config.php");
include_once('pdf/fpdf.php');

if(isset($_POST["generate_pdf"])){
    class PDF extends FPDF{
        // Page header
        function Header(){
            // Logo
            //$this->Image('https://i2.wp.com/tutorialswebsite.com/wp-content/uploads/2016/01/cropped-LOGO-1.png',10,10,50);
            $this->SetFont('Arial','B',13);
            // Move to the right
            $this->Cell(65);
            // Title
            $this->Cell(65,10,'User List',0,0,'C');
            // Line break
            $this->Ln(20);
        }

        // Page footer
        function Footer(){
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    
    $display_heading = array('id'=>'ID', 'name'=> 'Name', 'phone'=> 'Phone','email'=> 'Email');
    $result = mysqli_query($con, "SELECT id, name, phone, email FROM login") or die("database error:". mysqli_error($con));
    $header = mysqli_query($con, "SHOW columns FROM login WHERE field != 'password'");
    $pdf = new PDF();
    //header
    $pdf->AddPage();
    //foter page
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',16);
    foreach($header as $heading){
        $pdf->Cell(47.5,10,$display_heading[$heading['Field']],1);
    }
    foreach($result as $row){
        $pdf->SetFont('Arial','',10);
        $pdf->Ln();
        foreach($row as $column)
        $pdf->Cell(47.5,10,$column,1);
    }
    $pdf->Output();
}
?>