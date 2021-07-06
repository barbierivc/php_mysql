<?php

if ($_REQUEST["action"]=="login")
{
    if($_POST["CAMPO_USUARIO"] == "vinicius" && $_POST["CAMPO_SENHA"]== "abc123")
    {
    session_start();
    $_SESSION["usuario"] = $_POST["CAMPO_USUARIO"];
    $_SESSION["autenticado"] = TRUE;
    header("Location: codigo_fonte_12.4.php");
    }
    else
    {
        echo "Seu nome de usuário ou senha estão incorretos";
    }
}