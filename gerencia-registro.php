<?php

var_dump($_POST, $_REQUEST);

#dados para conexão com o banco de dados
$server   = 'localhost';
$user     = 'root';
$password = '';
$db       = 'integration';
var_dump([
    $server,
    $user,
    $db,
    $password
]);
#executa o link para MySql

$link = mysqli_connect($server, $user, $password, $db) or die ('Não foi possivel conectar :' .mysqli_error($link));

#verifca se o arquivo foi chamado a partir de um formulário
if(isset($_REQUEST["acao"])&& $_REQUEST["acao"] == "adicionar"){
    #cria a expressão SQL de inserção
    $sql = "INSERT INTO BOOK(NAME, AUTHOR, COMPANY) VALUES(";
    $sql .= "'". $_POST['FormNomeLivro']."',";
    $sql .= "'". $_POST['FormNomeAutor']."',";
    $sql .= "'". $_POST['FormNomeEditora']."'";
    $sql .= ")";
var_dump($sql);
    #Executa a expressão SQL no servidor, e armazena
    $result = mysqli_query($link, $sql);

    #verifica o sucesso da operação
    if(!$result){
        die('Erro'.mysqli_error($link));
    }else{
        echo 'A operação foi realizada com Sucesso.';
    }
}

header('Location:index.html');
?>


