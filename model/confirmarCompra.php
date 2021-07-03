<?php
require_once "conexao.php";

class compraConf
{
     public function buscaValorTotal($email){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT valor FROM carrinho where situacao='aguardo' and email_usuario= :email ;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
        
        
        $sql->execute();
        return array_sum(array_column( $sql->fetchAll(),'valor'));
        
	}
       
     
    public function upProdutos($email){
		if ($this) {
            $conMySQL = DB::conexao();

           
         $stringSQL = "update carrinho set situacao='OK' where situacao='aguardo' and email_usuario= :email;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":email", $email);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
	}
    
    public function confCompra($email,$dataCompra,$formaPag,$valorTotal){
        
		if ($this) {
            $conMySQL = DB::conexao();

           
         $stringSQL = "INSERT INTO  dadoscompra
                          VALUES ('',:dataCompra, :formaPagamento, :emailCliente,:valorTotal);";
          
        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->bindValue(":dataCompra", $dataCompra);
        $sql->bindValue(":formaPagamento", $formaPag);
        $sql->bindValue(":emailCliente", $email);
        $sql->bindValue(":valorTotal", $valorTotal);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }  
   

}
    
}

?>