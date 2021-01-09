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
 
        View::load('tipoImpostoCadastro',[
            'tipoimposto' => $tipoimposto,
        ]);
    }

    public function update()
    {
        // pega os dados do formuário
        $id = $_POST['id'];
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
 
        if (User::update($id, $name, $email, $gender, $birthdate))
        {
            header('Location: /');
            exit;
        }
    }
	
}