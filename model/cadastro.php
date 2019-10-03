<?php
    require_once 'Conexao.php';


    $sql = "SELECT * FROM `pessoa` WHERE nome = '".$_POST['name']."'";

    //seleção de cadastro no banco para verificar se usuário já existe
    $conexao = new Conexao();
    $retorno = $conexao->select($sql);

    if(count($retorno) > 0){
        //caso usuário exista
        echo 'no-cadastro';
    }else if(count($retorno) == 0){
        $sql = 'INSERT INTO pessoa (nome, senha) VALUES ("'.$_POST['name'].'", "'.$_POST['senha'].'");';
        //inserção de cadastro no banco
        $conexao = new Conexao();
        $retorno = $conexao->insert($sql);
        echo 'cadastro';
    }
?>      