<?php

include "src/conexao.php";
$conexao = Conexao::getConexao();

$email =  isset($_POST['email']) ? $_POST['email'] : "";

if($email != ""){


    $resposta = array(
        "resposta" => "OK"
    );
    echo json_encode($resposta);
}else{

    $resposta = array(
        "resposta" => "ERROR"
    );
    echo json_encode($resposta);
}


