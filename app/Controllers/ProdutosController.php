<?php

namespace App\Controllers;

use App\Core\View;

/**
 * 
 */
class ProdutosController
{
	
	public function index()
	{
		# code...
		View::load('produtosAll');
	}
	public function create()
	{
		View::load('produtoCadastro');
	}
	
}