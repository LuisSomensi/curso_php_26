<?php

interface EntityInterface {
    public function criar();
    public function obter($id);
    public function obterTodos($filtros = "");
    public function atualizar($id);
    public function delletar($id);
}


//Model|| ENTITY, REPRESENTA A TABELA DO BANCO NA PROGRAMACAO.
abstract class EntityAbstract implements EntityInterface {
    public$id;
    public $tabelaNome;
    public$usuarioAlteracao;
    public$criadoEm;
    public$atualizadoEm;

    public function criar() {

    }
    public function obter($id) {

    }
    public function obterTodos($filtros = "") {

    }
    public function atualizar($id) {

    }
    public function delletar($id) {

    }
}
