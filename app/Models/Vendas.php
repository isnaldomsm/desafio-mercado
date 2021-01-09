<?php
namespace App\Models; 
use App\Core\DB; 

class Vendas{
 /** * Busca produtos * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
    public static function selectAll($id = null) {
        $where = ''; 
        if (!empty($id)) { 
            $where = 'WHERE id = :id'; 
        } 

        $sql = sprintf("SELECT id, nomeproduto, precoproduto, quantidadeproduto FROM produtos  ORDER BY id ASC"); 
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
}