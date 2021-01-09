<?php

namespace App\Controllers;
use App\Models\TipoImposto; 
use App\Core\View;

/**
 * 
 */
class tipoProdutoImpostoController
{
	
	public function index()
	{
		$tipoimposto = TipoImposto::selectAll(); 
		View::load('tipoImposto', [ 
            'tipoimposto' => $tipoimposto,
        ]);
	}

	public function create()
	{
		View::load('tipoImpostoCadastro');
	}

	public function add()
    {
        // pega os dados do formuário
        $nometipo 			= isset($_POST['nometipo']) ? $_POST['nometipo'] : null;
        $porcentagem		= isset($_POST['porcentagem']) ? $_POST['porcentagem'] : null;
        $descricaotipo  	= isset($_POST['descricaotipo']) ? $_POST['descricaotipo'] : null;
        
 
        if (TipoImposto::save($nometipo, $porcentagem, $descricaotipo))
        {
            header('Location: /tipoprodutoimposto');
            exit;
        }
    }
     /**
     * Remove um tipo/imposto
     */
    public function remove($id)
    {
        if (TipoImposto::remove($id))
        {
            header('Location: /tipoprodutoimposto');
            exit;
        }
    }

    //editar tipo/imposto
    public function edit($id)
    {
        $tipoimposto = TipoImposto::selectAll($id)[0];
 
        View::load('tipoImpostoUpdate',[
            'tipoimposto' => $tipoimposto,
        ]);
    }

    public function update()
    {
        // pega os dados do formuário
        $id = $_POST['id'];
        $nometipo           = isset($_POST['nometipo']) ? $_POST['nometipo'] : null;
        $porcentagem        = isset($_POST['porcentagem']) ? $_POST['porcentagem'] : null;
        $descricaotipo      = isset($_POST['descricaotipo']) ? $_POST['descricaotipo'] : null;
       
 
        if (TipoImposto::update($id, $nometipo, $porcentagem, $descricaotipo))
        {
            header('Location: /tipoprodutoimposto');
            exit;
        }
    }
	
}