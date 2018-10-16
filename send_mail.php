<?php 
require_once 'vendor/autoload.php';

use HelloSign\Client; 
use HelloSign\TemplateSignatureRequest;

//Se inicializa la libreria
$client = new Client('cde1a6ecd551e80b5198e239c173a7454e6052b75d51ae0d8f2fe43ddd363abd');
$request = new TemplateSignatureRequest;

//se colocan los parametros necesarios
$request->enableTestMode();//activa el modo de prueba
$request->setTemplateId('ed4d6137d767f4ea83118bd1757f0d9492fea01d');//se elige el tipo de entrada
$request->setTitle('Contrato de Arriendo');//Titulo del correo
$request->setSubject('Esto es un ejemplo de la libreria');//texto del correo
$request->setMessage('Esto es un ejemplo de la libreria');//mensaje del correo
$request->setSigner('Client', $_POST['email'], $_POST['name']);//Datos de usuario introducidos en el pequeño formulario del inicio
$response = $client->sendTemplateSignatureRequest($request);//se envia el corro

echo "mensaje enviado <a href='index.php'>Regresar</a>";//para retornar al inicio


?>