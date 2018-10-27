<?php
include "src/conexao.php";


$conexao = Conexao::getConexao();

//$classe = "Conexao";
//$con = $classe::getConexao();

$email =  isset($_POST['email']) ? $_POST['email'] : "";

if($email != ""){



    try{
        $sql = "INSERT INTO email(email) VALUES(:email)";
        $stm = $conexao->prepare($sql);
        $stm->bindParam(':email',$email);
        $stm->execute();
    }catch (Exception $e){
        echo $e->getMessage();
    }



    echo '
    <form id="formEnvia" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control"
                   name="email"
                   id="email" placeholder="Email">
        </div>
        <a href="#" class="btn btn-primary salvarEmail" id="btSalvar">Salvar</a>
    </form>
    <script type="text/javascript">
        $(".salvarEmail").unbind("click").bind(\'click\', function(){
            salvarEmail();
            alert("E-mail: '.$email.' salvo com sucesso");
        });
    </script>
    ';
}else{

    $resposta = array(
        "resposta" => "ERROR"
    );
    echo json_encode($resposta);
}


