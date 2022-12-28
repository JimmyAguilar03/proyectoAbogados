<?php
    $this->load->library('fpdf/Fpdf');
    $pdf = new Fpdf();  
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(0,10, utf8_decode('Lista de clientes'),0,1,'C');
    
    $pdf->SetXY(10,25);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10, utf8_decode('Nombre:'),0,0);
    $nombreC= $cliente->nombre . " " . $cliente->apellido_p . " ". $cliente->apellido_m;
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,10, utf8_decode($nombreC));

    $pdf->SetXY(150,25);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(10,10, utf8_decode('DNI:'),0,0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,10, utf8_decode($cliente->DNI));

    $pdf->SetXY(150,35);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10, utf8_decode('Telefono:'),0,0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,10, utf8_decode($cliente->telefono));

    $pdf->SetXY(10,35);
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->Cell(22,10, utf8_decode('Direccion: '),0,0);
    $pdf->SetFont('Arial','', '12');
    $pdf->Cell(50,10,utf8_decode($cliente->direccion));


    
    $url="https://www.abogadoamigo.com/wp-content/uploads/2021/12/Abogado-Amigo.png";
    $pdf->Image($url, 10,5,20);
    $pdf->Image($url, 183,5,20);

    $pdf->Output();

