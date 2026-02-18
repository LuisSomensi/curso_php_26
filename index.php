<?php
// $_GET
// $_POST
// $_REQUEST
// empty() => falsy(null, undefined, [], {}, 0, e false)
//isset() => true|| false se a prpriendade existe
// ?rota=criar
// &id=5
//http://localhost/curso_php_26/
//http://localhost/curso_php_26/?rota=criar
//http://localhost/curso_php_26/?rota=criar&id=5
$dados = $_REQUEST;

$irParaListagem = empty ($dados) || !isset($dados["rota"]);

if ($irParaListagem) {
    echo "Estou na listagem fallback";
    return;
}

$rota = $dados ["rota"];

if ($rota == "listar"){
    echo "Estou na listar";
    return;
}

if ($rota == "criar"){
    echo $dados["nome"] = "João<br>";
    echo $dados["idade"] = "16
    <br>";
    echo "Estou na criar";
    return;
}

if ($rota == "editar"){
    echo "Estou na editar";
    return;
}

if ($rota == "excluir"){
    echo "Estou na excluir";
    return;
}