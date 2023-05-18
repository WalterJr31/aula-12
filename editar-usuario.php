<?php
include "cabecalho.php";
include "menu-sistemas.php";

$id = $_GET["id"];
$nome = $email = "";

include "conexao.php";
$sql_buscar = "select * from usuario where id = $id";
$todos_os_usuarios = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Editar usuário Cód.: <?php echo $id; ?></h6>
        </div>
        <div class="col-12">
            <form action="salvar-usuario-editado.php?id=<?php echo $id; ?>" method="post">
                Nome: <input name="nome" value="<?php echo $nome; ?>">
                Email: <input name="email" value="<?php echo $email ?>">
                <button type="submit">salvar</button>
            </form>
        </div>
    </div>
</div>
</div>
