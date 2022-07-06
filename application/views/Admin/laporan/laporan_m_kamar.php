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
    <th valign="middle" style="width:20px;text-align:center;"><b>No</b></th>
    <th valign="middle" style="width:100px;text-align:center;"><b>No Kamar</b></th>
    <th valign="middle" style="width:180px;text-align:center;"><b>Nama Kamar</b></th>
    <th valign="middle" style="width:120px;text-align:center;"><b>Kelas Kamar</b></th>
    <th valign="middle" style="width:120px;text-align:center;"><b>Status Kamar</b></th>
</tr>';
$pdf->SetFont('Times', '', 10);
foreach ($kamar as $data) {
    $tbl .= '<tr>';
    $tbl .= '<td style="text-align:center;">' . $i . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['no_k'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['nama_k'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['kelas_k'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['status_k'] . '</td>';
    $tbl .= '</tr>';
    $i++;
}
$tbl .= '</table>';
$pdf->writeHTML($tbl);
$pdf->Output();
