<?php

// Consulta estado de la Merchant_order

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token, $collector_id, $notificationJSON;

$external_reference = $_REQUEST["external_reference"];

$url = "https://api.mercadopago.com/merchant_orders/search";

// REVISA AQUÍ (DONE):
// Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder hacer un get
// de una merchant_order en base al external_reference recibido?
// Pista... revísalo bien...
// Sustituye el método por su correspondiente: get, put, post, delete

// curl_call("MÉTODO","$url?external_reference=$external_reference&access_token=$access_token");
curl_call("get", $url . "?external_reference=" . $external_reference . "&access_token=" . $access_token, $notificationJSON);
