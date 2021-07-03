<?php
require_once "conexao.php";

class cadastro
{
     
       public function inserirUser($cpf, $email,$senha){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "INSERT INTO  usuario
                          VALUES ('', :cpfUser,:emailUser, :senhaUser);";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":cpfUser", $cpf);
            $sql->bindValue(":emailUser", $email);
            $sql->bindValue(":senhaUser", $senha);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    } 
    
    
}

?>