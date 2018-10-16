<?php 
require_once 'vendor/autoload.php';


$client = new HelloSign\Client('cde1a6ecd551e80b5198e239c173a7454e6052b75d51ae0d8f2fe43ddd363abd');
$request = new HelloSign\TemplateSignatureRequest;
$request->enableTestMode();
$request->setTemplateId('ed4d6137d767f4ea83118bd1757f0d9492fea01d');
$request->setTitle('Contrato de Arriendo');
$request->setSubject('Esto es un ejemplo de la libreria');
$request->setMessage('Esto es un ejemplo de la libreria');
$request->setSigner('Client', $_POST['email'], $_POST['name']);
$response = $client->sendTemplateSignatureRequest($request);

echo "mensaje enviado <a href='index.php'>Regresar</a>";


?>