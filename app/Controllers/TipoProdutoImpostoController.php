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
		# code...
		View::load('tipoImposto');
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
	
}