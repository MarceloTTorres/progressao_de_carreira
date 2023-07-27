<?php

    class usuariocontroller {

        public function allusuario() {
            $conexao = new Conexao();
            $conexao = $conexao->conexao();
            $stmt = $conexao->prepare("SELECT * FROM usuario;");
            $stmt->execute();
            $usuarios = $stmt->fetchAll();
            $stmt = null;
            return $usuarios;

        }

        public function cadastrarusuario($dados) {
            $conexao = new Conexao();
            $conexao = $conexao->conexao();
            $senha = $dados['senha'];
            $stmt = $conexao->prepare('INSERT INTO usuario(nome, email, senha) VALUES(:enome, :eemail, :esenha);');
            $stmt->bindParam(':enome', $dados['nome']);
            $stmt->bindParam(':eemail',$dados['email']);
            $stmt->bindParam(':esenha',$dados['senha']);
            $result =  $stmt->execute();
            return $result;
        }

        public function login($email, $senha) {
            $conexao = new Conexao();
            $conexao = $conexao->conexao();  
            $stmt = $conexao->prepare("SELECT email, senha FROM usuario WHERE email = '$email' AND senha = '$senha'");
            $stmt->execute();
            //$stmt->execute(array('email' => $email, 'senha' => $senha));

            if ($stmt->rowcount() > 0) {
                $result = $stmt->fetch();
                $_SESSION['logged_in'] = true;
                $_SESSION['email'] = $result['email'];
                $_SESSION['senha'] = $result['senha'];
                return true;
            }else {
                return false;
            }
        }

      

        public function logout(){
            session_destroy();
        }

        public function isLoggedIn(){
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                return true;
            }
            return false;
        }

    }

?>