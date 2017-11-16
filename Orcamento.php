<?php
    class Orcamento{
        private $valor;

        function __construct($novoValor)
        {
            $this->valor = $novoValor;
        }
        function getValor(){
            return $this->valor;
        }
    }