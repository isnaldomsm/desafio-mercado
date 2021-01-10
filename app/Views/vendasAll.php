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
   <!--/.col-sm-12-->
   <table class="table table-striped table-bordered">
      <thead>
         <tr class="bg-primary text-white">
            <th>#Id</th>
            <th>PRODUTOS</th>
            <th>QUANTIDADE(Un)</th>
            <th>PREÇO</th>
            <th>TOTAL DA VENDA</th>
            <th>TOTAL DE IMPOSTO NESSE PRODUTO</th>
             <th>VALOR SEM IMPOSTO</th>
           
         </tr>
      </thead>
      <tbody>
         <?php foreach ($venda as $vendas): var_dump($vendas);
            $total = $vendas["quantidadeproduto"] * $vendas["produtopreco"];
            $pctm = $vendas["imposto"];
            $valor_descontado = $total - ($total / 100 * $pctm);

            $valortotal +=  $total;
            $valortotalimposto += $valor_descontado;
            ?>
         <tr>
            <td><?php echo $vendas["id"]; ?></td>
            <td><?php echo $vendas["nomeproduto"]; ?></td>
            <td><?php echo $vendas["quantidadeproduto"]; ?></td>
            <td>R$:<?php echo $vendas["produtopreco"]; ?></td>
            <td>R$:<?php echo $total; ?></td>
            <td>% <?php echo $vendas["imposto"]; ?></td>
            <td>R$: <?php echo $valor_descontado; ?></td>

         </tr>
         <?php endforeach; ?>
         
      </tbody>
      <!-- totalizador valores -->
   </table>
   <table class="table table-striped table-bordered">
      <thead>
         <tr class="bg-primary text-white">
            <th><center>TOTALIZADOR</center></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>VALOR TOTAL DAS VENDAS:</td>
         </tr>
         <td>R$: <?php echo $valortotal;?></td>
      </tbody>
   </table>
   <!-- totalizador imposto -->
   <table class="table table-striped table-bordered">
      <thead>
         <tr class="bg-primary text-white">
            <th><center>TOTALIZADOR</center></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>VALOR TOTAL DAS VENDAS DESCONTANDO IMPOSTOS:</td>
         </tr>
         <td>R$: <?php echo $valortotalimposto;?></td>
      </tbody>
   </table>
</div>
</body>
</html>