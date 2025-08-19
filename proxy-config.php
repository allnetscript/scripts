<?php
// proxy-config.php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$json = file_get_contents("https://www.tbcred.com.br/sistema/simulador-config.json");
echo $json;
?>
