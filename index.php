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

// remove um usuário
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


 
$app->run();