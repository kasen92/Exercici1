<?php

require_once ('lib/nusoap.php');

$wsdl="http://www.webservicex.net/globalweather.asmx?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
$params = array('CountryName'=>$_POST['pais']);
// $params = array('CountryName'=>'spain');
$ciudades = $client->call('GetCitiesByCountry', $params);
$xml = new SimpleXMLElement($ciudades["GetCitiesByCountryResult"]);
foreach ($xml->Table as $key => $value) {
	echo '<p>'.$value->City.'</p>';
}