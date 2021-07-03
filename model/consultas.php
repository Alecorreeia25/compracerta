<?php
require_once "conexao.php";

class Consultas
{
           
    public function listarProdutos($email){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT nomeProduto,quantidade,valor,situacao FROM carrinho where situacao='aguardo' and email_usuario= :email;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
        
        
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
    public function listarTodosProdutos(){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM produtos;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);        
        
        
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
    
    
    
    
    
    
    public function listarDatasCompra($email){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT dataCompra FROM dadoscompra where emailCliente=:email group by dataCompra;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
        
        
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
    public function listarCompras($email,$data){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT nomeProduto,quantidade, valor FROM carrinho where email_usuario=:email and dataCompra= :dataCompra;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":dataCompra", $data);
        
        
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
	}


}
