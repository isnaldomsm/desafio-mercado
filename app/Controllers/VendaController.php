<?php
namespace App\Controllers;
use App\Models\Vendas;
use App\Core\View;

/**
 *
 */
class VendaController
{

    public function index()
    {
        # code...
        $vendas = Vendas::selectAll();
        View::load('vendasAll', ['venda' => $vendas, ]);

    }

    public function cadastro()
    {
        $produtovendas = Vendas::selectAll($id);

        View::load('vendasCadastro', ['produtovenda' => $produtovendas, ]);

    }
    public function realizarvenda()
    {
        $vendas = Vendas::selectCompra($id);

        View::load('vendasCadastro', ['venda' => $vendas, ]);

    }
    public function add()
    {
        // pega os dados do formuário
        $produtoid = isset($_POST['produtoid']) ? $_POST['produtoid'] : null;
        $quantidadeproduto = isset($_POST['quantidadeproduto']) ? $_POST['quantidadeproduto'] : null;
        $nomeproduto = isset($_POST['nomeproduto']) ? $_POST['nomeproduto'] : null;
        $produtopreco = isset($_POST['produtopreco']) ? $_POST['produtopreco'] : null;
        $imposto = isset($_POST['imposto']) ? $_POST['imposto'] : null;

        if (Vendas::save($produtoid, $quantidadeproduto, $nomeproduto, $produtopreco, $imposto))
        {
            header('Location: /vendas');
            exit;
        }
    }
}

?>
