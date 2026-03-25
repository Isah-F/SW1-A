<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if($nome = "isabela" && $senha = "1234"){
        echo"<h3>Acesso permitido.</h3>";
        echo"<p>Seja bem vinda, ".$nome."!</p>";
    }else{
        echo"<h3>Erro: Acesso negado.</h3>";
        echo"<p>Informação incorreta.</p>";
    }
?>