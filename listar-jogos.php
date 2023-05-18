<?php

include "cabecalho.php";
include "menu-sistemas.php";

?>




<div class="container">

    <div class="row">

        <div class="col text-center mt-3 mb-3">
            <h1>Lista de Jogos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table border="1" class="table table-dark table-hover">
                <tr>
                    <td>Código</td>
                    <td>Título</td>
                    <td>Categoria</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";
                $sqlbuscar = "select * from jogo";
                $todos_os_jogos = mysqli_query($conexao, $sqlbuscar);
                while ($um_jogo = mysqli_fetch_array($todos_os_jogos)) :
                ?>
                    <tr>
                        <td><?php echo $um_jogo["id"]; ?> </td>
                        <td><?php echo $um_jogo["titulo"]; ?> </td>
                        <td><?php echo $um_jogo["categoria"]; ?> </td>
                        <td>
                            <a class="link-underline link-underline-opacity-0" href="excluir-jogos.php?id=<?php echo $um_jogo["id"]; ?>">❌</a>

                            <a class="link-underline link-underline-opacity-0" href="ver-jogo.php?id=<?php echo $um_jogo["id"]; ?>"><img src="img/eye.png" alt="ver"></a>

                            <a class="link-underline link-underline-opacity-0" href="editar-jogos.php?id=<?php echo $um_jogo["id"]; ?>">🖌</a>
                            
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