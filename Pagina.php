<?php

class Pagina{
    private $cabecalho;
    private $menu;
    private $conteudo;
    private $rodape;
    

    public function recebeCabecalho(){
        include "cabecalho.php";
    }
       
    
    public function recebeMenu(){
        include "menu.php";
    }

    public function recebeConteudo(){
        include "conteudo.php";
    }

    public function recebeRodape(){
        include "rodape.php";
    }

}