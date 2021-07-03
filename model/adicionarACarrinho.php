<?php
require_once "conexao.php";

class adicionar
{
      public function adicionarCarrinho($email, $produto,$quantidade, $valor,$situacao,$data){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "INSERT INTO  carrinho
                          VALUES (:email_usuario,:nomeProduto, :quantidade, :valor,:situacao,:dataCompra);";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":email_usuario", $email);
            $sql->bindValue(":nomeProduto", $produto);
            $sql->bindValue(":quantidade", $quantidade);
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":situacao", $situacao);
            $sql->bindValue(":dataCompra", $data);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }
    
    
}

?>