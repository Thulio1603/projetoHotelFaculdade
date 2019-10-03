<?php
    require_once 'Conexao.php';

    $sql = "SELECT * FROM `pessoa` WHERE nome = '".$_POST['name']."' AND email = '".$_POST['senha']."'";

    //seleção de cadastro no banco
    $conexao = new Conexao();
    $retorno = $conexao->select($sql);

    if(count($retorno) > 0){
        echo 'login';
    }else{
        echo 'no-login';
    }
?>      