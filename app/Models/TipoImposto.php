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

    public static function selectAll($id = null) {
        $where = ''; 
        if (!empty($id)) { 
            $where = 'WHERE id = :id'; 
        } 

        $sql = sprintf("SELECT id, nometipo, porcentagemimposto, descricaotipo FROM tipoimposto %s ORDER BY id ASC", $where); 
        $DB = new DB; $stmt = $DB->prepare($sql);
        // var_dump($sql);
        if (!empty($where))
        {
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        }

        $stmt->execute();
 
        $produtos = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
        return $produtos;

    }
     public static function remove($id)
    {
        // valida o ID
        if (empty($id))
        {
            echo "ID não informado";
            exit;
        }
          
        // remove do banco
        $DB = new DB;
        $sql = "DELETE FROM tipoimposto WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
          
        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            echo "Erro ao remover";
            print_r($stmt->errorInfo());
            return false;
        }
    }


}




?>