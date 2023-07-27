<?php
	
	class Conexao{

	    private $usuario = 'root';
	    private $senha = '';

	    
		public function conexao(){
	    	return new PDO('mysql:host=localhost;dbname=UPWISE; charset=utf8', $this->usuario, $this->senha);
		}

		
		public function make_hash($str){
		    return sha1(md5($str));
		}	 
	 
		
		public function isLoggedIn(){
		    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
		        return false;
		    }
		    return true;
		}
	}   
?>