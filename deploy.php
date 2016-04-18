<?php
require_once ('lib/nusoap.php');

$wsdl="http://localhost/soap/nusoap/serv/calc_server.php?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
$params = array('a' => $_POST['num1'], 'b'=>$_POST['num2']);
echo $client->call($_POST['operacion'], $params);
return false;