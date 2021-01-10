<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><meta name="description" content=""><meta name="author" content=""><link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"><title>Mercado jardim floresta</title>
<!-- Bootstrap core CSS -->
<link href="/app/assets/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="/app/assets/dashboard.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
         <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Mercado Jardim Floresta</a>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
               <div class="sidebar-sticky">
                  <ul class="nav flex-column">
                     <li class="nav-item">
                        <a class="nav-link active" href="#">
                           <span data-feather="home"></span>
                        Dashboard 
                           <span class="sr-only">(current)</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/tipoprodutoimposto">
                           <span data-feather="file"></span>
                        Tipo produto / Imposto
                        
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/produtos">
                           <span data-feather="shopping-cart"></span>
                        Produtos
                        
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/vendas">
                           <span data-feather="bar-chart-2"></span>
                        Vendas
                        
                        </a>
                     </li>
                  </ul>
               </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
               <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"></div>
               <?php 
                  if (isset($viewName)) { 
                    $path = viewsPath() . $viewName . '.php';
                    if (file_exists($path)) { 
                      require_once $path; 
                    } 
                  } 
                  ?>
            </main>
         </div>
      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('
         <script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
         </script>
         <script src="../../assets/js/vendor/popper.min.js"></script>
         <script src="../../dist/js/bootstrap.min.js"></script>
         <!-- Icons -->
         <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
         <script>
         feather.replace()
      </script>
         <!-- Graphs -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      </body>
   </html>