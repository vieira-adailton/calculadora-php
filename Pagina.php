<?php

class Pagina{
    private $cabecalho;
    private $menu;
    private $conteudo;
    private $rodape;
    
    private function pg($pagina){

        return $pagina.".php";
    }

    public function pagina($pagina){
        include $this->pg($pagina);
    }
    public function index(){

    }

}

/*
public function __construct(){
} função de contrutor, serve para podermos construir objetos, é a função que chamamos quando criamos "variavel = new Variavel()", quando criada sem personalizar, vem em branco, mas pode ser construido com base no que precisamos.
 Utilizaremos o Firebird, open source, como banco de dados para as aulas de PHP. É um driver, que serve como linguagem de conversação entre PHP e SQL.

 Aula 20/10/25

 Explicações e mostragem visual dos diversos bancos de dados: MariaDB, MySQL, Oracle, SQL Server, PostgreSQL, ODBC, Firebird.

 Caso não hajam bancos de dados para a linguagem, é possível realizar a criação de um baseando-se na configuração do driver.

Classe para conexão no banco de dados = PDO - acrônimo para -> PHP Data Object 
*/