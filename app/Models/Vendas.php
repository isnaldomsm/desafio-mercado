<?php
namespace App\Models; 
use App\Core\DB; 

class Vendas{
 /** * Busca produtos * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
    public static function selectAll($id = null) {
       

        $sql = sprintf("SELECT id, produtoid, quantidadeproduto  FROM vendas  ORDER BY id ASC"); 
        $DB = new DB; $stmt = $DB->prepare($sql);
        // var_dump($sql);
        if (!empty($where))
        {
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        }

        $stmt->execute();
 
        $vendas = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        //var_dump($vendas);
        $i=1;
        foreach ($vendas as $venda) {
                
        $sqlvendas = "SELECT id, nomeproduto  FROM produtos where id =". $venda['id'];      
        $DB = new DB; $stmt = $DB->prepare($sqlvendas);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        $vendaslistar = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($vendaslistar as  $vendaslista) {
           $array = array(
                    “chave1” => $venda['quantidadeproduto'],
                    “chave2” => $vendaslista['nomeproduto']);
        
        }
        }
      
        return $array;

    }


    public static function save($produtoid, $quantidadeproduto)
    {
       
        // validação (bem simples, só pra evitar dados vazios)
        if (empty($produtoid) || empty($quantidadeproduto))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
          
        
        $DB = new DB;
        $sql = "INSERT INTO vendas(produtoid, quantidadeproduto) VALUES(:produtoid, :quantidadeproduto)";
        var_dump($sql);
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':produtoid', $produtoid);
        $stmt->bindParam(':quantidadeproduto', $quantidadeproduto);
        
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