<?php


define("QUEBRAR_LINHA", "<br>");
class SalaDeAula {
    public $numero = 0;
    public $classes = [];
    public $luzLigada;
    public $lampadaQueimada;
    public $arCondicionado = "";

    public function __construct($numero)
    {
        $this->numero = $numero;
        $this->luzLigada = false;
        $this->lampadaQueimada = false;
    }
    
    public function ligarALuz(){
        $estaQueimada = $this->verificarLampada();
        if ($estaQueimada){
            return "A sala" .$this->numero. "está com a lâmpada queimada."   . QUEBRAR_LINHA;
        }
        $this->luzLigada = true;
        
        return "A sala" . $this->numero . " está com a lâmpada ligada."     . QUEBRAR_LINHA;
    }

    public function desligarALuz(){
        $this->LuzLigada = false;

        return "A sala" . $this->numero . " está com a lâmpada desligada."       . QUEBRAR_LINHA;
    }

    public function verificarLampada(){
        $estaQueimada = $this->lampadaQueimada;

        if ($estaQueimada) {
            return true;
        }

        return false;

    }


    public function queimarLampada(){
        $this->luzLigada = false;
        $this->lampadaQueimada = true;
    }
    public function trocarLampada(){
    $estaLigada = $this->luzLigada;
    if($estaLigada) {
        $this->luzLigada = false;
    }
        $this->luzLigada = false;
        $this->lampadaQueimada = false;
    }
}

$objSalaDeAula = new SalaDeAula(101);
echo $objSalaDeAula->ligarALuz();
$objSalaDeAula->queimarLampada();
echo $objSalaDeAula->ligarALuz();
echo $objSalaDeAula->trocarLampada();
echo $objSalaDeAula->ligarALuz();