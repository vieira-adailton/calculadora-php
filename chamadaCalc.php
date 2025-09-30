<?php
require_once "Calculadora.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$calc = new Calculadora();
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];

$resultado = $_POST["operacao"];
}

switch($resultado){
    case 'soma':
        $calc->soma($numero1,$numero2);
        $calc->mostraResultado();
        break;
    case 'sub':
        $calc->sub($numero1,$numero2);
        $calc->mostraResultado();
        break;
    case 'div':
        if($numero2 == '0'){
            echo 'Não é possível a divisão';
        } else{
        $calc->div($numero1,$numero2);
        $calc->mostraResultado();}
        break;
    case 'mult':
        $calc->mult($numero1,$numero2);
        $calc->mostraResultado();
        break;
    default:
        echo 'Insira dois números: ';
        break;

}