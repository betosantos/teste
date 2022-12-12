<?php

namespace SegPartners;


class Calculo 
{   
    public function __construct(public string $calculo) {
        $calculo = '1.234,56';
    }


    public function valor($calculo)
    {        
        $calculo = floatval($calculo);        
        return $this->calculo;
    }


    public function somar($calculo)
    {        
        $valor = 0;
        $valor = floatval(($calculo) + 1.07);        
        return $valor;
    }


    public function formatar($calculo)
    {
        $valor = 0;
        $valor = $calculo + 1.07;
        return $valor;
    }


}