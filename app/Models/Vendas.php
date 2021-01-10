<?php
namespace App\Models; 
use App\Core\DB; 

class Vendas{
 /** * Busca produtos * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
    public static function selectAll($id = null) {
       

        $sql = sprintf("SELECT id, produtoid, quantidadeproduto, nomeproduto, produtopreco  FROM vendas  ORDER BY id ASC"); 
        $DB = new DB; $stmt = $DB->prepare($sql);
        
        $stmt->execute();
 
        $vendas = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        return $vendas;

    }

    public static function selectCompra($id = null) {
       

        $sql = sprintf("SELECT id, nomeproduto, precoproduto, descricaoproduto, quantidadeproduto  FROM produtos  ORDER BY id ASC"); 
        $DB = new DB; $stmt = $DB->prepare($sql);
      
        
       

        $stmt->execute();
 
        $vendas = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        return $vendas;


    }


    public static function save($produtoid, $quantidadeproduto, $nomeproduto, $produtopreco)
    {
       
        // validação (bem simples, só pra evitar dados vazios)
        if (empty($produtoid) || empty($quantidadeproduto))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
          
        
        $DB = new DB;
        $sql = "INSERT INTO vendas(produtoid, quantidadeproduto, nomeproduto, produtopreco) VALUES(:produtoid, :quantidadeproduto, :nomeproduto, :produtopreco)";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':produtoid', $produtoid);
        $stmt->bindParam(':quantidadeproduto', $quantidadeproduto);
        $stmt->bindParam(':nomeproduto', $nomeproduto);
        $stmt->bindParam(':produtopreco', $produtopreco);
        
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