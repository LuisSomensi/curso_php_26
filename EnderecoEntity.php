<?php

require_once "./EntityAbstract.php";

class EnderecoEntity extends EntityAbstract {
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $logradouro;
    public $complemento;
    public $pontoDeReferencia;

    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }
}