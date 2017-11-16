<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 10/11/2017
     * Time: 13:34
     */


    class CalculadoraDeImpostos
    {
        function calcula(Orcamento $orcamento, $imposto)
        {
            return $imposto->calculaImposto($orcamento);
        }

    }