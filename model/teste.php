<?php
require_once 'Conexao.php';


    $conexao = new Conexao();
    $conexao->insert('pessoa','nome','rafael');
    var_dump($conexao);

?>