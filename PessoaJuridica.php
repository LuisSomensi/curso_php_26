<?php

require_once "./PessoaAbstract.php";

define("QUEBRAR_LINHA", "<br>");

class PessoaJuridica extends PessoaAbstract{
    public $CNPJ;

    public function __constrct() {
        $this->resetarPessoa();
        $this->CNPJ = "";
    }
    public function validar(){
        $cpf = $this->CNPJ;

        $this->validarCPF($cnpj);
}
}

