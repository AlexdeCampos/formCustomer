
<div class="container">
	<div class="row">
        <div class="d-flex ">
            <h4 class="p-2">Clientes</h4>
            <h4 class="ml-auto p-2"><a href="<?=BASE_URL?>">Início</a></h4>
        </div>

        <div class="container">
            <form action=<?="index.php?url=customers/set/$id"?> method="post">
                
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="<?=$name?>" required>

                <label for="document">CPF/CNPJ</label>
                <input type="number" name="document" id="document" class="form-control"  value="<?=$document?>" required>

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control"  value="<?=$email?>" required>

                <label for="tel">Telefone</label>
                <input type="number" name="tel" id="tel" class="form-control"  value="<?=$tel?>" required>

                <br>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=BASE_URL?>" role="button" class="btn btn-primary">Cancelar</a>
            </form>
        </div>
    </div>
</div>