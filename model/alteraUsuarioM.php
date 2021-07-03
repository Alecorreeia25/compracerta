<?php
require_once "conexao.php";

class alterarUsu
{
     public function alterarUser($cpf, $email,$senha){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "update usuario
                          set email= :email, senha=:senha where cpf=:cpf;";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":cpf", $cpf);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }
    
    
}

?>