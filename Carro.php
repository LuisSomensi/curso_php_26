<?php

// POO // OOP
//Programação Orientda a Objeto
/**
 * Cracteristicas: Propriendades / Atibutos
 * */
 define("QUEBRA_LINHAS", "<br>");



class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $combustivel;
    private $placa;
    public $ligar;


    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function getPlaca($placa){
        return $this->placa;
    }

    public function ligar($chave){
        if (!$chave){
            echo "Impossível ligar o carro sem a chave." . QUEBRA_LINHAS;
        }
        if (!$this->combustivel){
            echo "Impossível ligar o carro sem combustível, GAS: $this->combustivel." . QUEBRA_LINHAS;
            return;
        }

        $this->ligar = true;
        echo "O carro está ligado" . QUEBRA_LINHAS;
    }
    
    public function desligar(){
    echo "O carro está desligado"; 
    }

}

$objCarro = new Carro();
$objCarro->marca = "Honda";
$objCarro->modelo = "Civic";
$objCarro->ano ="2012";
$objCarro->modelo = "Preto";
$objCarro->combustivel = "Gasolina";
$objCarro->setPlaca("IOP-4321");

$chave = "presencial";
$objCarro->ligar($chave);
$objCarro->desligar();


