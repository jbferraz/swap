<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of andar
 *
 * @author jairb
 */
class andar {
    /* Evita que a classe seja clonada */
    private function __clone() {
    }
    /* Método destrutor da classe */
    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }
    
    //put your code here
    private $idandarPredio;
    private $numAndarPredio;
    private $predio_idpredio;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {
        
    }
    
    function getIdandarPredio() {
        return $this->idandarPredio;
    }

    function getNumAndarPredio() {
        return $this->numAndarPredio;
    }

    function getPredio_idpredio() {
        return $this->predio_idpredio;
    }


}
