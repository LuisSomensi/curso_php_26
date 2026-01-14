<?php

require_once "./PessoaAbstract.php";


define("QUEBRAR_LINHA", "<br>");

class PessoaFisica extends PessoaAbstract{
    public function __constrct() {
        $this->resetarPessoa();
        $this->CPF = "";
    }
    public function validar(){
        $cpf = $this->CPF;

        $this->validarCPF($cpf);
    }
}