	<div class="container">
		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>CADASTRO PRODUTOS</strong> <a href="/produtos" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Listar Produtos</a></div>

			<div class="card-body">

				

				<div class="col-sm-6">

					<h5 class="card-title">Campos com <span class="text-danger">*</span> são obrigatorios!</h5>

					<form method="post" action="/produto/add">

						<div class="form-group">

							<label>Nome do produto <span class="text-danger">*</span></label>

							<input type="text" name="produtoNome" id="produtoNome" class="form-control" placeholder="Nome do Produto" value="<?php echo $produtos['nomeproduto'];?>" required>

						</div>

						<div class="form-group">

							<label>Preço do produto <span class="text-danger">*</span></label>

							<input type="number" step="0.01" name="precoProduto" id="precoProduto" class="form-control" placeholder="Preço do Produto" value="<?php echo $produtos['precoproduto'];?>" required>

						</div>

						<div class="form-group">

							<label>Descrição do produto <span class="text-danger">*</span></label>
							<textarea name="descricaoProduto" value="" class="form-control" required="true"><?php echo $produtos['descricaoproduto']; ?>
							</textarea>

						</div>
						<div class="form-group">

							<label>Tipo/categoria <span class="text-danger">*</span></label>

							<select name="tipoCategoria" class="form-control">
								<option name="tipoCategoria" value="01">
									Sustentavel
								</option>
								<option name="tipoCategoria" value="01">
									Reciclavel
								</option>
							</select>

						</div>

						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Cadastrar Produto</button>

						</div>

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