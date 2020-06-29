<?php

// Crea una store

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token, $collector_id, $integrator_id_test, $country_id;

$access_token = "APP_USR-7026946692817220-061822-8b7c9e20631faac22d9e4cfa92a37265-586728271";
$collector_id = "586728271";
// REVISA AQUÍ (DONE):
// Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder
// crear una store en base a su collector_id y el JSON enviado?
// Sustituye el método por su correspondiente: get, put, post, delete
// Pista: Revisa detenidamente el endpoint y encuentra el fallo

$url = "https://api.mercadopago.com/users/";
$json = $_POST["json"];

curl_call("post", $url . $collector_id . "/stores?access_token=" . $access_token, $json);
