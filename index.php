<?php
// inclui o autoloader do Composer 
require 'vendor/autoload.php'; 
// inclui o arquivo de inicialização 
require 'init.php'; 
// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento) 
$app = new \Slim\App([ 'settings' => [
        'displayErrorDetails' => true
    ]
]);
  

$app->get('/', function ()
{
    # code...
    $homeController = new \App\Controllers\homeController;
    $homeController->index();
});

$app->get('/produtos', function ()
{
    # code...
    $ProdutosController = new \App\Controllers\ProdutosController;
    $ProdutosController->index();
});

$app->get('/produtos/cadastro', function ()
{
    # code...
    $ProdutosController = new \App\Controllers\ProdutosController;
    $ProdutosController->create();
});

// processa o formulário de cadastro
$app->post('/produto/add', function ()
{
    $ProdutoController = new \App\Controllers\ProdutosController;
    $ProdutoController->add();
});

// remove um produto
$app->get('/produto/remove/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');
 
    $ProdutosController = new \App\Controllers\ProdutosController;
    $ProdutosController->remove($id);
});

// edição de produtos
// exibe o formulário de edição
$app->get('/produto/edit/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');
 
    $ProdutosController = new \App\Controllers\ProdutosController;
    $ProdutosController->edit($id);
});
//update produto
$app->post('produto/edit', function ()
{
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->update();
});


//
$app->get('/tipoprodutoimposto', function ()
{
    # code...
    $tipoProdutoImpostoController = new \App\Controllers\tipoProdutoImpostoController;
    $tipoProdutoImpostoController->index();
});

$app->get('/tipoprodutoimposto/cadastro', function ()
{
    # code...
    $tipoProdutoImpostoController = new \App\Controllers\tipoProdutoImpostoController;
    $tipoProdutoImpostoController->create();
});

$app->post('/tipoprodutoimposto/add', function ()
{
    # code...
    $tipoProdutoImpostoController = new \App\Controllers\tipoProdutoImpostoController;
    $tipoProdutoImpostoController->add();
});

// remove um tipo/imposto
$app->get('/tipoprodutoimposto/remove/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');
 
    $tipoProdutoImpostoController = new \App\Controllers\tipoProdutoImpostoController;
    $tipoProdutoImpostoController->remove($id);
});

//update produto
$app->get('/tipoprodutoimposto/edit/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');
 
    $tipoProdutoImpostoController = new \App\Controllers\tipoProdutoImpostoController;
    $tipoProdutoImpostoController->edit($id);
});

// edição de tipo/imposto
// exibe o formulário de edição
$app->post('/tipoprodutoimposto/edit', function ($request)
{
    $tipoProdutoImpostoController = new \App\Controllers\tipoProdutoImpostoController;
    $tipoProdutoImpostoController->update();
});

//venda
$app->get('/vendas', function ($request)
{
    $VendaController = new \App\Controllers\VendaController;
    $VendaController->index();
});
$app->get('/vendas/cadastro', function ($request)
{
    $VendaController = new \App\Controllers\VendaController;
    $VendaController->realizarvenda();
});
$app->post('/vendas/add', function ($request)
{
    $VendaController = new \App\Controllers\VendaController;
    $VendaController->add();
});
$app->run();