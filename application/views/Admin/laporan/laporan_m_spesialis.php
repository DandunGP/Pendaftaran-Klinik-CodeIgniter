<?php
$pdf = new TCPDF('P', 'mm', 'A4');

$pdf->setPrintFooter(false);
$pdf->setPrintHeader(false);
$pdf->SetAutoPageBreak(false);
$pdf->AddPage('');
$image1 = base_url() . "assets/img/logoklinik.jpg";
$gambar1 = $pdf->Image($image1, 14, 8, 28);
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0, 7, 'Laporan Kamar', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0, 7, 'Klinik Pratama Annisa Husada', 0, 1, 'C');
$pdf->Cell(0, 7, 'Jl. Kalingga Barat 8 No.8, Banjarsari, Surakarta', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 5);
$pdf->Ln(-2);

// $x1 = 10;
// $y1 = 10;
// $x2 = 10;
// $y2 = 10;

$pdf->SetLineWidth(0);
$pdf->Line(12, 40, 198, 40);
$pdf->SetLineWidth(1);
$pdf->Line(12, 41, 198, 41);
$pdf->SetLineWidth(0);
$pdf->Ln(5);

$pdf->SetFont('Times', 'B', 10);

$i = 1;
$tbl = '<table border="1" cellpadding="3">
<tr>
    <th valign="middle" style="width:50px;text-align:center;"><b>No</b></th>
    <th valign="middle" style="width:200px;text-align:center;"><b>Nama Poliklinik</b></th>
</tr>';
$pdf->SetFont('Times', '', 10);
foreach ($spesialis as $data) {
    $tbl .= '<tr>';
    $tbl .= '<td style="text-align:center;">' . $i . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['nama_spesialis'] . '</td>';
    $tbl .= '</tr>';
    $i++;
}
$tbl .= '</table>';
$pdf->writeHTML($tbl);
// $pdf->writeHTMLCell(50, 0, 60, 50, $tbl, false);
$pdf->Output();
