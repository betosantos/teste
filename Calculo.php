<?php

namespace SegPartners;


class Calculo 
{
    public function __construct(private string $valor) {}


    public function valor($valor)
    {
        return $valor >= 150;
    }
    

}