<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_array($result);
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row["Id"] ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $row["Nome"]; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php echo $row["Email"]; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php echo $row["Data_nasc"]; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Editar</button>
    </div>
</form>