<?php
namespace App\Models; 
use App\Core\DB; 
class produtos{
	public static function save($nomeProduto, $precoProduto, $descricaoProduto, $tipoCategoria)
    {
        echo $nomeProduto;
        echo $precoProduto;
        echo $descricaoProduto;
        echo $tipoCategoria;
        // validação (bem simples, só pra evitar dados vazios)
        if (empty($nomeProduto) || empty($precoProduto) || empty($descricaoProduto) || empty($tipoCategoria))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
          
        
        $DB = new DB;
        $sql = "INSERT INTO produtos(nomeProduto, precoProduto, descricaoProduto, tipoCategoria) VALUES(:nomeProduto, :precoProduto, :descricaoProduto, :tipoCategoria)";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nomeProduto', $nomeProduto);
        $stmt->bindParam(':precoProduto', $precoProduto);
        $stmt->bindParam(':descricaoProduto', $descricaoProduto);
        $stmt->bindParam(':tipoCategoria', $tipoCategoria);
 
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

    /** * Busca produtos * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
    public static function selectAll($id = null) {
        $where = ''; 
        if (!empty($id)) { 
            $where = 'WHERE id = :id'; 
        } 

        $sql = sprintf("SELECT id, nomeproduto, precoproduto, descricaoproduto, tipocategoria FROM produtos %s ORDER BY id ASC", $where); 
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
        $sql = "DELETE FROM produtos WHERE id = :id";
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
     public static function update($nomeProduto, $precoProduto, $descricaoProduto, $tipoCategoria)
    {
        // validação (bem simples, só pra evitar dados vazios)
        if (empty($nomeProduto) || empty($precoProduto) || empty($descricaoProduto) || empty($tipoCategoria))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
          
        
          
        // insere no banco
        $DB = new DB;
        $sql = "UPDATE produtos SET nomeproduto = :nomeProduto, precoproduto = :precoProduto, descricaoproduto = :descricaoProduto, tipocategoria = :tipoCategoria WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nomeProduto', $name);
        $stmt->bindParam(':precoProduto', $precoProduto);
        $stmt->bindParam(':descricaoproduto', $descricaoProduto);
        $stmt->bindParam(':tipoCategoria', $tipoCategoria);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
 
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