<?php
   $this->load->library('fpdf/Fpdf');
   $pdf = new Fpdf();
   $pdf->AddPage();

   $pdf->SetFont('Arial','B',20);
   $pdf->Cell(0,10, utf8_decode('Asuntos fiscales'),0,1,'C');

   $pdf->SetXY(10,25);
   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Cell(20,10, utf8_decode('Nombre: '),0);
   $nombreCliente = $asunto->nombre . " " . $asunto->apellido_p . " ". $asunto->apellido_m;
   $pdf->SetFont('Arial', '', 12);
   $pdf->Cell(0,10, utf8_decode($nombreCliente));

   $pdf->SetXY(10,32);
   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Cell(20,10, utf8_decode('Estado: '),0);
   $pdf->SetFont('Arial', '', 12);
   $pdf->Cell(30,10, utf8_decode($asunto->no_asunto));

   $pdf->SetXY(130,25);
   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Cell(30,10, utf8_decode('Fecha inicio: '),0,0);
   $pdf->SetFont('Arial', '', 12);
   $pdf->Cell(40,10, utf8_decode($asunto->fecha_inicio),0,1);

   $pdf->SetXY(130,32);
   $pdf->SetFont('Arial', 'B', 12);
   $pdf->Cell(30,10, utf8_decode('Fecha final: '),0,0);
   $pdf->SetFont('Arial', '', 12);
   $pdf->Cell(40,10, utf8_decode($asunto->fecha_final),0,1);

   $pdf->SetXY(98,45);
   $pdf->SetFont('Arial', 'B', 16);
   $pdf->Cell(15,10, utf8_decode('Detalle: '),0,1,'C');
   $pdf->SetFont('Arial', '', 12);
   $pdf->Cell(0,10, utf8_decode($asunto->detalle),0,0);

   



   $url="https://www.abogadoamigo.com/wp-content/uploads/2021/12/Abogado-Amigo.png";
   $pdf->Image($url, 10,5,20);
   $pdf->Image($url, 183,5,20);
   $pdf->Output();