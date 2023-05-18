<?php

include "cabecalho.php";
include "menu-sistemas.php";

?>

<div class="container">
    <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h1>Lista de usuários</h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <table border="1" class="table table-dark table-hover">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";
                $sqlbuscar = "select * from usuario";
                $todos_os_usuarios = mysqli_query($conexao, $sqlbuscar);
                while ($um_usuario = mysqli_fetch_array($todos_os_usuarios)):
                ?>
                    <tr>
                        <td><?php echo $um_usuario["id"]; ?> </td>
                        <td><?php echo $um_usuario["nome"]; ?> </td>
                        <td><?php echo $um_usuario["email"]; ?> </td>
                        <td>
                            <a class="link-underline link-underline-opacity-0" href="excluir-usuario.php?id=<?php echo $um_usuario["id"]; ?>">❌</a>

                            <a class="link-underline link-underline-opacity-0" href="ver-usuario.php?id=<?php echo $um_usuario["id"]; ?>"><img src="img/eye.png" alt="ver"></a>

                            <a class="link-underline link-underline-opacity-0" href="editar-usuario.php?id=<?php echo $um_usuario["id"]; ?>">🖌</a>
                            
                        </td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</html>
</body>