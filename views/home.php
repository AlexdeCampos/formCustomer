<div class="container">

	<div class="row">

		<div class="col-sm-9">

			<div class="d-flex ">
				<h4 class="p-2">Clientes</h4>
				<h4 class="ml-auto p-2"><a href="<?=BASE_URL.'customers/new'?>">Novo Cliente</a></h4>
			</div>
				
			<table class="table table-striped">
				<tbody>

				<tr>
					<th>Nome</th>
					<th>Documento</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th></th>
				</tr>

					<?php foreach($customersList as $customer): ?>
					<tr>
						<td>
							<?=$customer['name']?>
						</td>
						<td>
							<?=$customer['document']?>
						</td>
						<td>
							<?=$customer['email']?>
						</td>
						<td>
							<?=$customer['tel']?>
						</td>
						<td>
							<a href="<?=BASE_URL.'customers/edit/'.$customer['id']?>">Editar</a>
							<a href="<?=BASE_URL.'customers/del/'.$customer['id']?>">Excluir</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

		</div>
	</div>


</div>