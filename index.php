<?php

$url = "http://test.analitica.com.co/AZDigital_Pruebas/WebServices/ServiciosAZDigital.wsdl";

try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $client->__setLocation('http://test.analitica.com.co/AZDigital_Pruebas/WebServices/SOAP/index.php');
 $result = $client->BuscarArchivo( [ "Condiciones" 
                                        => ["Condicion" 
                                            => ["Tipo" => "FechaInicial", "Expresion" =>'2019-07-01 00:00:00' ]
                                        ]
]);

$xml = new SimpleXMLElement('<xml/>');
$data = $xml->addChild('data');

foreach($result->Archivo as $result) {
    $track = $data->addChild('Archivo');
    $track->addChild('Id', $result->Id);
    $track->addChild('Nombre', preg_replace('/[^A-Za-z0-9.]/', '', $result->Nombre));
}

Header('Content-type: text/xml');
print($xml->asXML());

$handle = fopen("data.xml", "w+");
fwrite($handle, $xml->asXML());
fclose($handle);

} catch ( SoapFault $e ) {
 echo $e->getMessage();
}


echo PHP_EOL;