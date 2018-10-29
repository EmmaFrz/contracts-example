<?php 
require_once 'vendor/autoload.php';

use HelloSign\Client; 
use HelloSign\SignatureRequest;


// reference the Dompdf namespace
use Dompdf\Dompdf;

$html =
      '<html>'.
      '<body>'.
      '<p>Esto es un pdf de prueba, aqui colocaremos la estructura html de nuestro'.
      'Contrato, lo prepararemos y lo colocaremos aqui o en una variable</p>'.
      '<p>Aqui podemos colocar por ejemplo el nombre: '.$_POST['name'].
      '<p>Aqui podemos colocar por ejemplo el apellido: '.$_POST['last_name'].
      '<p>Aqui podemos colocar por ejemplo el telefono: '.$_POST['phone'].
      '<p>Aqui podemos colocar por ejemplo el direccion: '.$_POST['dir'].	
      '</p>'.
      '</body>'.
      '</html>';

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents('Brochure.pdf', $output);


$client = new Client('cde1a6ecd551e80b5198e239c173a7454e6052b75d51ae0d8f2fe43ddd363abd');
$request = new SignatureRequest;
$request->enableTestMode();
$request->setTitle('PDF + Correo');
$request->setSubject('Prueba de control');
$request->setMessage('This is a email test');
$request->addSigner( $_POST['email'], $_POST['name']);
$request->addFile('Brochure.pdf');
$response = $client->sendSignatureRequest($request);
	echo "mensaje enviado <a href='index.php'>Regresar</a>";

?>