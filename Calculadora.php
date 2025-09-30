<?php 

class Calculadora{
    private $numero1;
    private $numero2;
    private $resultado;


    public function mostraResultado(){
        echo "<br> Resultado: " .$this->resultado."<br>";
    }

    public function soma($n1,$n2){
        $this->resultado = $n1 + $n2;
        return $this->resultado;
    }

    public function div($n1,$n2){
        $this->resultado = $n1 / $n2;
        return $this->resultado;
    }

    public function mult($n1,$n2){
        $this->resultado = $n1 * $n2;
        return $this->resultado;
    }

    public function sub($n1,$n2){
        $this->resultado = $n1 - $n2;
        return $this->resultado;
    }
}