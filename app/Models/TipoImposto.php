<?php
namespace App\Models; 
use App\Core\DB; 

class tipoimposto{
	public static function save($nometipo, $porcentagem, $descricaotipo)
    {
       
        // validação (bem simples, só pra evitar dados vazios)
        if (empty($nometipo) || empty($porcentagem) || empty($descricaotipo) )
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
          
        
        $DB = new DB;
        $sql = "INSERT INTO tipoimposto(nometipo, porcentagemimposto, descricaotipo) VALUES(:nometipo, :porcentagem, :descricaotipo)";
        var_dump($sql);
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nometipo', $nometipo);
        $stmt->bindParam(':porcentagem', $porcentagem);
        $stmt->bindParam(':descricaotipo', $descricaotipo);
       
 
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao cadastrar";
            print_r($stmt->errorInfo());
            return false;
        }
    }


}




?>