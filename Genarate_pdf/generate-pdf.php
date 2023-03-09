<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;
require __DIR__ . "/vendor/autoload.php";

$options = new Options();
$options -> set('chroot',realpath(''));



//data student

$Fullname = $_POST["fullname"];
$Adress = $_POST["address"];
$Tel = $_POST["phone"];
$codeM = $_POST["codeMassar"];
$moy = $_POST["moy"];


// instantiate and use the dompdf class
$dompdf = new Dompdf($options);



$html = file_get_contents('template.php');


$html = str_replace(["{{name}}","{{adress}}","{{Tel}}","{{cMassar}}","{{moy}}" ], [$Fullname , $Adress , $Tel , $codeM , $moy] , $html);


$dompdf->loadHtml($html);
//format pdf
//$dompdf->setPaper('A4', 'landscape');
//$dompdf->set_option('isRemoteEnabled', TRUE);

// Render the HTML as PDF
$dompdf->render();



// Output the generated PDF to Browser
//stream("name doc)
$dompdf->stream("Information.pdf" , array("Attachment" => 0));



?>