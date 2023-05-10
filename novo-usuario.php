<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="salvar-usuario.php">
                    <input name="nome" required placeholder="Nome"><br>
                    <input name="email" type="email" required placeholder="E-mail"><br>
                    <input name="senha" type="password" required placeholder="Senha"><br>
                    <button type="submit" class="btn btn-success">Salvar Usuário</button>
                </form>
            </div>
        </div>
    </div>
    <?php

    $mensagem = $_GET["msg"] ?? "";
    if ($mensagem == "sucesso") {
    ?>
        <div class="alert alert-success" role="alert">
            ✅ Usuário Cadastrado com Sucesso.
        </div>
    <?php
    }
    ?>