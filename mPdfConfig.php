<?php
/**
 * Function : mPdf configs.
 *
 * examplete of mPdf configration.
*/

$option = [ 'mode' => 'utf-8', 'format' => 'A4-P', 'orientation' => 'P'];
$title = "Content Title";
$viewPath = "Laravel View Path";
$data['title'] = "Hi";

$view = view($viewPath, $data);
$mpdf = new \Mpdf\Mpdf($options);
$mpdf->SetTitle($title);

$cssFile = 'style.css';
$mpdf->WriteHTML(file_get_contents($cssFile), \Mpdf\HTMLParserMode::HEADER_CSS);

$pdfSavePath = storage_path('pdf');

$mpdf->curlAllowUnsafeSslRequests = true;
$mpdf->WriteHTML($view, 2);
$mpdf->Output($pdfSavePath.'/'.$title . '.pdf', 'F');

// $mpdf->Output('I'); // for stream
// $mpdf->Output('F'); // for save
// $mpdf->Output('D'); // for download