<?php
class cetak_pdf
{

    // function __construct()
    // {
    //     include_once APPPATH . '/third_party/fpdf/fpdf.php';
    // }
    function __construct()
    {
        include_once APPPATH . '/third_party/TCPDF/tcpdf.php';
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
}
