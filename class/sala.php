<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sala
 *
 * @author jairb
 */
class sala {
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
    private $idsalaAndar;
    private $numSalaAndar;
    private $descricaoSala;
    private $capacidadeAlunoSala;
    private $idtipoSala;
    private $idandarPredio;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdsalaAndar() {
        return $this->idsalaAndar;
    }

    function getNumSalaAndar() {
        return $this->numSalaAndar;
    }

    function getDescricaoSala() {
        return $this->descricaoSala;
    }

    function getCapacidadeAlunoSala() {
        return $this->capacidadeAlunoSala;
    }

    function getIdtipoSala() {
        return $this->idtipoSala;
    }

    function getIdandarPredio() {
        return $this->idandarPredio;
    }

}
