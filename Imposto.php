<?php
    /**
     * Created by PhpStorm.
     * User: lucas.vieira
     * Date: 10/11/2017
     * Time: 13:59
     */

    interface Imposto
    {
        function calculaImposto(Orcamento $orcamento);
    }