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




 
$app->run();