<?php
include "cabecalho.php";
include "menu-sistemas.php";

$id = $_GET["id"];
$nome = $email = "";

include "conexao.php";
$sql_buscar = "select * from usuario where id = $id";
$todos_os_usuario = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)):
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
endwhile;
mysqli_close($conexao);
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Detalhes do Usuário ID: <?php echo $id; ?></h6>
        </div>
        <div class="col-12">
            <h3>Nome: <?php echo $nome;?></h3>
            <p>Email: <?php echo $email;?></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
</body>