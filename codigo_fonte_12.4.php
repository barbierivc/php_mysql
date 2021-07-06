<?php
session_start();
if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != TRUE)
{
    echo "Acesso não Autorizado!<br>";
    echo "Por gentileza,faça o seu login
    <a href='codigo_fonte_12.3.php'>clicando Aqui</a>";
    exit();
}
else
{
    echo "Você está logado como Usuário: " .$_SESSION["usuario"];
}