
<div class="container">
    <form action=<?="?url=customers/set/$id"?> method="post">
    
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control" value="<?=$name?>">

     <label for="document">CPF/CNPJ</label>
    <input type="text" name="document" id="document" class="form-control"  value="<?=$document?>">

     <label for="email">E-mail</label>
    <input type="email" name="email" id="email" class="form-control"  value="<?=$email?>">

     <label for="tel">Telefone</label>
    <input type="text" name="tel" id="tel" class="form-control"  value="<?=$tel?>">

    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="<?=BASE_URL?>" role="button" class="btn btn-primary">Cancelar</a>
    </form>

</div>