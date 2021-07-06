<?php

if ($_REQUEST["action"]=="sent"){
    session_start();
    $_SESSION["usuario"] = $_POST["CAMPO_USUARIO"];
    echo "<a href='codigo_fonte_12.2.php'>Outro arquivo</a>";
}else
{
    echo "Erro na criação do Usuário";
}
