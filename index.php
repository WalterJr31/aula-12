<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iGames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<?php
include "cabecalho.php";
include "menu.php";
?>

<body>
    <div class="container-fluid banner">
        <div id="carouselExample" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/GOW.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/apex.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/cult-of-the-lamb.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Jogos em destaque</h1>
            </div>
            <div class="col-12 text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sapiente odit, placeat officia ratione inventore saepe quae culpa consequatur ad iste quasi mollitia cum ullam doloremque quis minima earum praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aperiam autem officiis nam sunt in esse quasi eveniet eaque. Assumenda eaque hic corporis non eum enim error impedit! Veniam, deserunt.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <?php

        include "conexao.php";
        
        $sqlbuscar = "select * from jogo";

        $todos_os_jogos = mysqli_query($conexao, $sqlbuscar);

        while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
        ?>
            <div class="col-3 text-center mt-4">
                <img src="<?php echo $um_jogo["foto"]; ?>" class="img-fluid"> <!-- style="object-fit: cover; height: 150px; width: 100%; object-position: top center;" -->

                <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"]; ?></h5>
                <h6 class="mt-3 mb-3"><?php echo $um_jogo["categoria"]; ?></h6>
                <a href="<?php echo $um_jogo["video"]; ?>" class="btn btn-outline-primary">VER MAIS</a>

            </div>
        <?php
        endwhile;
        mysqli_close($conexao);
        ?>
    </div>

    <div>
        <div class="row text-center mt-5">
            <div class="col-12">
                <h2>Entre em Contato</h2>
            </div>
            <div class="col-12">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod non, quibusdam exercitationem rem error dolor, iure explicabo ad ut quasi hic? At atque maiores nulla vero. Atque harum possimus fuga!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quia, impedit mollitia vero labore soluta ipsam officiis natus reprehenderit, eum pariatur doloremque, quibusdam delectus odit est illo eaque nihil perferendis.</p>
            </div>
        </div>
        <div class="row">
            <form action="inserir-contato.php" method="post">
                <div class="col">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                    </div>
                    <div class="mb-2">
                        <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control" name="duvidas" rows="4" placeholder="Dúvida"></textarea>
                    </div>
                    <div class="mb-2 text-center">
                        <button type="submit" class="btn btn-success w-25">Enviar</button>

                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>