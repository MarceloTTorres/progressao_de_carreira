<?php

include_once 'conexao.php';
include_once 'usuariocontroller.php';

function addusuario($dados){
    $usuarios = new usuariocontroller();
    $result = $usuarios->cadastrarusuario($_POST);

    if ($result){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.php'>
            <script type=\"text/javascript\">
                alert(\"Cadastro realizado com sucesso!\");
            </script>
            ";
    }else{
        echo "Erro ao cadastrar";
        $result->errorInfo();
    }
}
?>