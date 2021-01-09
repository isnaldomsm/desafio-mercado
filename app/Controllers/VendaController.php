<?php
namespace App\Controllers;
use App\Models\Vendas; 
use App\Core\View;

/**
 * 
 */
class VendaController{


	public function index()
	{
		# code...
		View::load('vendasAll');
	}

	public function cadastro()
	{
		$produtovendas = Vendas::selectAll($id);
 
        View::load('vendasCadastro',[
            'produtovenda' => $produtovendas,
        ]);

		
	}
	public function add()
    {
        // pega os dados do formuário
        $produtoid 			= isset($_POST['produtoid']) ? $_POST['produtoid'] : null;
        $quantidadeproduto	= isset($_POST['quantidadeproduto']) ? $_POST['quantidadeproduto'] : null;
       
        
 
        if (Vendas::save($produtoid, $quantidadeproduto))
        {
            header('Location: /vendas');
            exit;
        }
    }
}



?>