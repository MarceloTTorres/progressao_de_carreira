<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilologin.css">
</head> 
<?php
include_once 'conexao.php';
include_once 'usuariocontroller.php';


$user = new usuariocontroller();

if (isset($_POST['enviar'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if ($user->login($email, $senha)) {
        if(isset($_SESSION["email"]) || isset($_SESSION["senha"]) ){
            header('Location: indexlogado.php');       
        
        
        exit;
    }
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= login.php'>
                <script type=\"text/javascript\">
                    alert(\"Senha ou email incorretos!\");
                </script>
            ";
    }
}
?>

<body>
<form method="POST">
<div class="main-login" style=>
<div class="center-login">
</div>
<div class="right-login">
     <div class="card-login">
     <img src="imagens/coruja.gif" class="center-login-img" alt="imagem de conhecimento">
        <h1>LOGIN</h1>
        <div class="textfield">
        <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Digite seu email" required>
        </div>
        <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required>
        </div>
        <button class="btn-login" type="submit" name="enviar"><h3>ENTRAR</h3></button>
        <a href="form-cadastro.php"> Não possui conta? Cadastre-se</a>
</div>
</div>
</div>
</body>
