<?php

namespace App\Controllers;
use App\Models\Produtos; 
use App\Core\View;



/**
 * 
 */
class ProdutosController
{
	public function create()
	{
		View::load('produtoCadastro');
	}

	 /**
     * Processa o formulário de criação de produto
     */
    public function add()
    {
        // pega os dados do formuário
        $nomeProduto 		= isset($_POST['produtoNome']) ? $_POST['produtoNome'] : null;
        $precoProduto		= isset($_POST['precoProduto']) ? $_POST['precoProduto'] : null;
        $descricaoProduto  	= isset($_POST['descricaoProduto']) ? $_POST['descricaoProduto'] : null;
        $tipoCategoria 		= isset($_POST['tipoCategoria']) ? $_POST['tipoCategoria'] : null;
        $quantidadeProduto  = isset($_POST['quantidadeproduto']) ? $_POST['quantidadeproduto'] : null;
        if (Produtos::save($nomeProduto, $precoProduto,  $descricaoProduto, $tipoCategoria, $quantidadeProduto))
        {
            header('Location: /produtos');
            exit;
        }
    }
	
    /** * Listagem de produtos */ 
    public function index() 
    { 
        $produtos = Produtos::selectAll(); 

        View::load('produtosAll', [ 
            'produtos' => $produtos,
        ]);
    }

    /**
     * Remove um produto
     */
    public function remove($id)
    {
        if (Produtos::remove($id))
        {
            header('Location: /produtos');
            exit;
        }
    }

    /**
     * Processa o formulário de edição de produtos
     */
    public function update()
    {
        // pega os dados do formuário
        $nomeProduto        = isset($_POST['produtoNome']) ? $_POST['produtoNome'] : null;
        $precoProduto       = isset($_POST['precoProduto']) ? $_POST['precoProduto'] : null;
        $descricaoProduto   = isset($_POST['descricaoProduto']) ? $_POST['descricaoProduto'] : null;
        $tipoCategoria      = isset($_POST['tipoCategoria']) ? $_POST['tipoCategoria'] : null;
 
        if (Produtos::update($id, $name, $email, $gender, $birthdate))
        {
            header('Location: /');
            exit;
        }
    }
    //editar produto
    public function edit($id)
    {
        $produtos = Produtos::selectAll($id)[0];
 
        View::load('produtoCadastro',[
            'produtos' => $produtos,
        ]);
    }
}