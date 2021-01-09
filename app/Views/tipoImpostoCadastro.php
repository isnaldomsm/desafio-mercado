	<div class="container">
		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>CADASTRO TIPO/IMPOSTO</strong> <a href="/tipoprodutoimposto" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Listar Tipo/Imposto</a></div>

			<div class="card-body">

				

				<div class="col-sm-6">

					<h5 class="card-title">Campos com <span class="text-danger">*</span> são obrigatorios!</h5>
					<?php 
						if(tipoimposto['id']){
							echo '<form method="post" action="/tipoprodutoimposto/add">';
						}else{
							echo '<form method="post" action="/tipoprodutoimposto/add">';
						}
					?>
					<form method="post" action="/tipoprodutoimposto/add">
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<div class="form-group">

							<label>Nome do Tipo<span class="text-danger">*</span></label>

							<input type="text" name="nometipo" id="produtoNome" class="form-control" placeholder="Nome do Produto" value="<?php echo $tipoimposto['nometipo'];?>" required>

						</div>

						<div class="form-group">

							<label>Porcentagem de Imposto <span class="text-danger">(%)</span></label>

							<input type="number" step="0.01" name="porcentagem" id="precoProduto" class="form-control" placeholder="Porcentagem do tipo" value="<?php echo $tipoimposto['porcentagemimposto'];?>" required>

						</div>

						<div class="form-group">

							<label>Descrição do Tipo<span class="text-danger">*</span></label>
							<textarea name="descricaotipo" class="form-control" required="true"><?php echo $tipoimposto['descricaotipo'];?></textarea>

						</div>
						

						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Cadastrar Tipo/Imposto</button>

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