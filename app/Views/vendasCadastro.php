	<div class="container">
		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>CADASTRO PRODUTOS</strong> <a href="/produtos" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Listar Produtos</a></div>

			<div class="card-body">
				<div class="col-sm-12">

					<h5 class="card-title">Apenas produtos com quantidade em estoque disponivel vão ser <span class="text-danger">listados! </span>abaixo para venda.</h5>

					

						<?php  
							foreach ($produtovenda as $produtovendas): 
								if($produtovendas['quantidadeproduto']>0):
						?>
						<form method="post" action="/vendas/add">
						<div class="form-group" style="margin-top: 5px;!important">
							<select name="produtoid" disabled style="float: left;" class="form-control col-sm-6">
								<option name="tipoCategoria" value="<?php echo $produtovendas['id'];?>">
									<?php echo $produtovendas['nomeproduto']; ?>
								</option>
								

							</select>
							<input type="hidden" name="produtoid" value="<?php echo $produtovendas['id'];?>">
							<input class="form-control col-sm-6" style="float: right;" type="number" step="1" name="quantidadeproduto" id="quantidadeproduto" class="form-control" placeholder="Quantidade maxima disponivel:<?php echo $produtovendas['quantidadeproduto'];?>" value="" min="0" max="<?php echo $produtovendas['quantidadeproduto'];?>" required>
						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i>Comprar esse produto</button>

						</div>
						
						</div>
						<?php 
							endif;
							endforeach;
						?>
						

					</form>

				</div>

			</div>

		</div>

	</div>

    


	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script>
		$(document).ready(function() {
		jQuery(function($){
			  var input = $('[type=tel]')
			  input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
			  input.bind('country.mobilePhoneNumber', function(e, country) {
				$('.country').text(country || '')
			  })
			 });
		});
	</script>

    

</body>

</html>