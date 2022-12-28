<?php
    $this->load->library('fpdf/Fpdf');
    $pdf = new Fpdf();  
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', '20');
    $pdf->Cell(0,10, utf8_decode('Lista de procuradores'),0,1,'C');

    $pdf->SetXY(10,25);
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->Cell(20,10, utf8_decode('Nombre: '),0,0);
    $NombreC= $procurador->nombre . " " . $procurador->apellido_p . " " . $procurador->apellido_m;
    $pdf->SetFont('Arial', '', '12');
    $pdf->Cell(40,10, utf8_decode($NombreC));

    $pdf->SetXY(140,25);
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->Cell(20,10, utf8_decode('Telefono: '),0,0);
    $pdf->SetFont('Arial','','12');
    $pdf->Cell(30,10, utf8_decode($procurador->telefono));

    $pdf->SetXY(10,35);
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->Cell(23,10, utf8_decode('Direccion: '),0,0);
    $pdf->SetFont('Arial','','12');
    $pdf->Cell(50,10,utf8_decode($procurador->direccion));



    $url="https://www.abogadoamigo.com/wp-content/uploads/2021/12/Abogado-Amigo.png";
    $pdf->Image($url, 10,5,20);
    $pdf->Image($url, 183,5,20);

    $pdf->Output();
?>