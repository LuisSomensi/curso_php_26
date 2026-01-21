<?php

require_once "./EntityAbstract.php";


class EstadoEntity extends EntityAbstract{
    public $estado;
    public $sigla;

    public function __construct()
    {
        $this->tabelaNome = "estado";
    }
}