<div class="container">
   <h1><a href="#">Mercado Jardim Floresta - Cadastro de Tipo e Imposto</a></h1>
   <div class="card">
      <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Itens Já Cadastrados</strong> <a href="tipoprodutoimposto/cadastro" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Cadastrar Tipo e imposto</a></div>
      <div class="card-body">
         <div class="col-sm-12">
            
         </div>
      </div>
   </div>
   <hr>
   <div>
   </div>
   <!--/.col-sm-12-->
   <table class="table table-striped table-bordered">
            <thead>
               <tr class="bg-primary text-white">
                  <th>#Id</th>
                  <th>Nome Tipo</th>
                  <th>Porcentagem de Imposto</th>
                  <th>Descricão</th>
                  
                  <th class="text-center" scope="col">Ações</th>
                  
               </tr>
            </thead>
            <tbody>
            <?php foreach ($tipoimposto as $tipoimpostos): ?>
            <tr>
                  <td><?php echo $tipoimpostos['id']; ?></td>
                  <td><?php echo $tipoimpostos['nometipo'];?></td>
                  <td><?php echo $tipoimpostos['porcentagemimposto'];?>%</td>
                  <td><?php echo $tipoimpostos['descricaotipo']; ?></td>
                  
                  <td align="center">
                     <a href="tipoprodutoimposto/edit/<?php echo $tipoimpostos['id']; ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                     <a href="tipoprodutoimposto/remove/<?php echo $tipoimpostos['id']; ?>" class="text-danger" onclick="return confirm('Você vai excluir o tipo/imposto: <?php echo $tipoimpostos['nometipo'].".";?> Certeza?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                  </td>

               </tr>
            <?php endforeach;?>
                   
                           </tbody>
         </table>
</div>
</body>
</html>