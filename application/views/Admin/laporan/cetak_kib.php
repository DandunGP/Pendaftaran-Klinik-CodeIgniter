<?php
$pdf = new FPDF('L', 'mm', array(140, 100));
$image1 = base_url() . "assets/img/logoklinik.jpg";
/* tinggal diganti image yang 1 dengan logo agan*/
$pdf->AddPage();
$gambar1 = $pdf->Image($image1, 13, 8, 19);
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(0, 7, 'Kartu Identitas Berobat', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 7, 'Klinik Pratama Annisa Husada', 0, 1, 'C');
$pdf->Cell(0, 7, 'Jl. Kalingga Barat 8 No.8, Banjarsari, Surakarta', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 5);
$pdf->Ln(-2);

$x1 = 10;
$y1 = 10;
$x2 = 10;
$y2 = 10;

$pdf->SetLineWidth(0);
$pdf->Line(12, 34, 127.5, 34);
$pdf->SetLineWidth(1);
$pdf->Line(12, 35, 127.5, 35);
$pdf->SetFont('Times', '', 14);

$pdf->Cell(35, 6, 'No RM', 0, 0, 'L');
$pdf->Cell(35, 6, ':  ' . $pasiendata['kib'], 0, 1, 'L');
$pdf->Cell(35, 6, 'Nama Pasien', 0, 0, 'L');
$pdf->Cell(35, 6, ':  ' . $pasiendata['nama_p'], 0, 1, 'L');
$pdf->Cell(35, 6, 'Tanggal Lahir', 0, 0, 'L');
$pdf->Cell(35, 6, ':  ' . $pasiendata['tanggal_lahir_p'], 0, 1, 'L');
$pdf->Cell(35, 6, 'No.Telp', 0, 0, 'L');
$pdf->Cell(35, 6, ':  ' . $pasiendata['notelp_p'], 0, 1, 'L');
$pdf->Cell(35, 6, 'Alamat', 0, 0, 'L');
$pdf->Cell(35, 6, ':  ' . $pasiendata['alamat_p'], 0, 1, 'L');
$pdf->SetFont('Times', 'BI', 12);
$pdf->Ln(4);
$pdf->SetAutoPageBreak(false);
$pdf->Cell(35, 4, 'BAWALAH KARTU INI SAAT BEROBAT', 0, 1, 'L');
$pdf->SetFont('Times', '', 10);
$pdf->Cell(35, 4, 'Melayani : Berobat Umum, Persalinan, Pemeriksaan Hamil & USG, Imunisasi,', 0, 1, 'L');
$pdf->Cell(35, 4, 'Pijat Bayi, KB, Khitan, Kons. Kespro dan Gizi.', 0, 1, 'L');
$pdf->Output();
