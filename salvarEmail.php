<?php


$email =  isset($_POST['email']) ? $_POST['email'] : "";

$resposta = array(
    "resposta" => "recebi o email"
);

echo json_encode($resposta);