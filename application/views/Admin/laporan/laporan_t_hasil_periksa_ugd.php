<?php
$pdf = new TCPDF('P', 'mm', 'A4');

$pdf->setPrintFooter(false);
$pdf->setPrintHeader(false);
$pdf->SetAutoPageBreak(false);
$pdf->AddPage('');
$image1 = base_url() . "assets/img/logoklinik.jpg";
$gambar1 = $pdf->Image($image1, 14, 8, 28);
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0, 7, 'Laporan Pendaftaran UGD', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0, 7, 'Klinik Pratama Annisa Husada', 0, 1, 'C');
$pdf->Cell(0, 7, 'Jl. Kalingga Barat 8 No.8, Banjarsari, Surakarta', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 1, 'C');
$pdf->Cell(0, 7, '', 0, 5);
$pdf->Ln(-2);

$pdf->SetLineWidth(0);
$pdf->Line(12, 40, 198, 40);
$pdf->SetLineWidth(1);
$pdf->Line(12, 41, 198, 41);
$pdf->SetLineWidth(0);
$pdf->Ln(5);
if (isset($tanggal1)) {
    $pdf->Ln(-4);
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(0, 10, 'Dari Tanggal ' . $tanggal1 . ' Sampai Tanggal ' . $tanggal2, 0, 1, 'C');
} elseif (isset($bulan)) {
    $pdf->Ln(-4);
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(0, 10, 'Dari Bulan ' . $bulan . ' dan Tahun ' . $tahun, 0, 1, 'C');
} elseif (isset($tahun)) {
    $pdf->Ln(-4);
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(0, 10, 'Di Tahun ' . $tahun, 0, 1, 'C');
}
$pdf->Ln(5);
$pdf->SetFont('Times', 'B', 10);

$i = 1;
// $query = $this->db->query("SELECT * FROM tb_pasien WHERE kib = '" . $data['kib'] . "' ")->row_array();
// $query3 = $this->db->query("SELECT * FROM tb_kamar WHERE id_kamar = '" . $data['id_kamar'] . "' ")->row_array();
$tbl = '<table border="1" cellpadding="3">
<tr>
    <th valign="middle" style="width:20px;text-align:center;"><b>No</b></th>
    <th valign="middle" style="width:65px;text-align:center;"><b>Kode Pasien</b></th>
    <th valign="middle" style="width:90px;text-align:center;"><b>Nama Pasien</b></th>
    <th valign="middle" style="width:100px;text-align:center;"><b>Keluhan</b></th>
    <th valign="middle" style="width:80px;text-align:center;"><b>Dokter</b></th>
    <th valign="middle" style="width:70px;text-align:center;"><b>Tanggal</b></th>
    <th valign="middle" style="width:45px;text-align:center;"><b>Cara Bayar</b></th>
    <th valign="middle" style="width:80px;text-align:center;"><b>No BPJS</b></th>
</tr>';
$pdf->SetFont('Times', '', 10);
foreach ($detail_pasien as $data) {
    $tbl .= '<tr>';
    $query = $this->db->query("SELECT * FROM tb_pasien WHERE kib = '" . $data['kib'] . "' ")->row_array();
    $query3 = $this->db->query("SELECT * FROM tb_dokter WHERE id_dokter = '" . $data['id_dokter'] . "' ")->row_array();
    $tbl .= '<td style="text-align:center;">' . $i . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['kib'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $query['nama_p'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['ket'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $query3['nama_d'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['tanggal'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['cara_bayar'] . '</td>';
    $tbl .= '<td style="text-align:center;">' . $data['no_bpjs']  . '</td>';
    $tbl .= '</tr>';
    $i++;
}
$tbl .= '</table>';
$pdf->writeHTML($tbl);
$pdf->Output();
