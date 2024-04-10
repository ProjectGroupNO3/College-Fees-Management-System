<?php
// Include Dompdf class
require_once 'dompdf/autoload.inc.php'; 

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

// Load HTML content from file
$html = file_get_contents('D:\Xampp2\htdocs\MegaProject\exform1.php');
// Load HTML into Dompdf
$dompdf->loadHtml($html);

// Set paper size and orientation (optional)
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to a file
$dompdf->stream('output.pdf');
?>


