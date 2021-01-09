<div class="container">
   <h1><a href="#">Mercado Jardim Floresta - Vendas</a></h1>
   <div class="card">
      <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Vendas já realizadas</strong> <a href="vendas/cadastro" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Realizar nova venda</a></div>
      <div class="card-body">
         <div class="col-sm-12">
            
         </div>
      </div>
   </div>
   <hr>
   <div>
   </div>
   <?php var_dump($vendas);?>
   <!--/.col-sm-12-->
   <table class="table table-striped table-bordered">
            <thead>
               <tr class="bg-primary text-white">
                  <th>#Id</th>
                  <th>Nome Produto</th>
                  <th>Preço</th>
                  <th>Descricão</th>
                  <th class="text-center">Categoria</th>
                  <th class="text-center" scope="col">Ações</th>
                  
               </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                  <td><?php echo $produto['id']; ?>dd</td>
                  <td><?php echo $produto['nomeproduto']; ?></td>
                  <td><?php echo $produto['precoproduto']; ?></td>
                  <td><?php echo $produto['descricaoproduto']; ?></td>
                  <td align="center"><?php echo $produto['tipocategoria']; ?></td>
                  <td align="center">
                     <a href="produto/edit/<?php echo $produto['id']; ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                     <a href="produto/remove/<?php echo $produto['id']; ?>" class="text-danger" onclick="return confirm('Você vai excluir o produto: <?php echo $produto['nomeproduto'].".";?> Certeza?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                  </td>

               </tr>
            <?php endforeach;?>
                   
                           </tbody>
         </table>
</div>
</body>
</html>