<?php
require_once "conexao.php";

class validacao
{
     public function validacaoUser($usuario, $senha){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM usuario where senha = '$senha' and email = '$usuario';";     

        

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
		
		
		return count($sql->fetchAll());
    }
       public function validacaoAdm($usuario, $senha){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM adm where senha = '$senha' and email = '$usuario';";     

        

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
		
		
		return count($sql->fetchAll());
    }
    } 
    
    


?>