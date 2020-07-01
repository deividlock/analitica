<?php
require ('conexion.php');

$xslDoc = new DOMDocument();
$xslDoc->load("getExtensiones.xsl");

$xmlDoc = new DOMDocument();
$xmlDoc->load("data.xml");

$proc = new XSLTProcessor();
$proc->importStylesheet($xslDoc);


$mysqli -> query("Truncate table extension");
if (!$mysqli -> query($proc->transformToXML($xmlDoc))) {
    echo("Error description: " . $mysqli -> error);
  }

echo $proc->transformToXML($xmlDoc);

echo '<br /><br /><br />';
/******* NOMBRES  *********/
$xslNombres = new DOMDocument();
$xslNombres->load("getNombres.xsl");

$xmlNombres = new DOMDocument();
$xmlNombres->load("data.xml");

$procNombres = new XSLTProcessor();
$procNombres->importStylesheet($xslNombres);

$mysqli -> query("Truncate table nombre");
if (!$mysqli -> query($procNombres->transformToXML($xmlNombres))) {
    echo("Error description: " . $mysqli -> error);
}

echo $procNombres->transformToXML($xmlNombres);