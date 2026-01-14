<?php

define("QUEBRAR_LINHA", "<br>");

interface AnimaisInterface {
    public function emitirSom();
}

abstract class Animais implements AnimaisInterface {
     public $nome;

     public function emitirSom() {
        return "ola mundo!";
     }
}

class Cachorro extends Animais{
    
    public function __construct(){
        $this->nome = $nome;
    }

    public function emitirSom(){
        return "O {$this->nome} diz: Au Au!"  . QUEBRAR_LINHA;
    }
}

class Gato {
     
    public function __construct(){
        $this->nome = $nome;
    }

    public function emitirSom(){
        return "O {$this->nome} diz: Miau Miau!"  . QUEBRAR_LINHA;
    }
}

class Papagaio { 
    
    public function __construct(){
        $this->nome = $nome;
    }

    public function emitirSom(){
        return "O {$this->nome} diz: Olá!"  . QUEBRAR_LINHA;
    }}

    $cachorro = new Cachorro ("Caramelo");
    echo $cachorro->emitirSom();

    $gato = new Cachorro ("Bigode");
    echo $gato->emitirSom();

    $papagaio = new Cachorro ("Rafael");
    echo $papagaio->emitirSom();