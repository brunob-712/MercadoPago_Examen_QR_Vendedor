<?php

// Crea el pos

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token;

// REVISA AQUÍ (DONE):
// Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder
// crear un POS/QR?
// Sustituye el método por su correspondiente: get, put, post, delete

$json = $_POST["json"];
$url = "https://api.mercadopago.com/pos";

curl_call("post", "$url?access_token=$access_token", $json);
