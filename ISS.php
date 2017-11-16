<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 10/11/2017
     * Time: 13:49
     */
    require "Imposto.php";
    class ISS implements Imposto
    {
        function calculaImposto(Orcamento $orcamento)
        {
            return $orcamento->getValor() * 0.1;
        }
    }