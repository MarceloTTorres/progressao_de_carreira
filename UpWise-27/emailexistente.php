
<?php
	
	include_once 'addusuario.php';

	if(isset($_POST['email'])){ 
	 
	    $email = $_POST['email'];
	 	

	 	$conexao = new Conexao();
        $conexao = $conexao->conexao();
        $stmt = $conexao->prepare('SELECT * FROM usuario WHERE email = "'.$email.'"');
        $stmt->execute();
		
		
       
        
		$count = $stmt->rowCount();
		
	    if($count > 0){
	        echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro.php'>
				<script type=\"text/javascript\">
					alert(\"Email já existente, por favor digite outro!\");
				</script>
				";
	    }else{
	    	addusuario($_POST);
	    }
	}
?>