<?php

class CidadeEntity extends EntityAbstract{
    public $cidade;
    public $codIbge;

    public function __construct()
    {
        $this->tabelaNome = "cidade";
    }
}