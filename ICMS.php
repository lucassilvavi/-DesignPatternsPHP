<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 10/11/2017
     * Time: 13:48
     */
    require "Imposto.php";
    class ICMS implements Imposto
    {
        function calculaImposto(Orcamento $orcamento)
        {
            return $orcamento->getValor() * 0.05;
        }
    }