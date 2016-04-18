<?php
	require_once 'lib/nusoap.php';

	$soap = new soap_server;
	$soap->configureWSDL('AddService', 'http://localhost/soap/nusoap/serv');
	$soap->wsdl->schemaTargetNamespace = 'http://localhost/soap/nusoap/serv';
	$soap->register('Add', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/soap/nusoap/serv');
	$soap->register('Substract', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/soap/nusoap/serv');
	$soap->register('Multiply', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/soap/nusoap/serv');
	$soap->register('Division', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/soap/nusoap/serv');
	$soap->service(isset($HTTP_RAW_POST_DATA) ?$HTTP_RAW_POST_DATA : '');

function Add($a, $b){
	return $a + $b;
}

function Substract($a, $b){
	return $a - $b;
}

function Multiply($a, $b){
	return $a * $b;
}

function Division($a, $b){
	return $a / $b;
}
?>

