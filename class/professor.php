<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professor
 *
 * @author jairb
 */
class professor {
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
    private $idprofessor;
    private $matricula;
    private $nomeProfessor;
    private $salarioHora;
    private $email;
    private $curriculo;
    private $foto;
    private $status;
    private $coordenardor;
    private $PF;
    
    /*Metodos get e set que trazem o conteudo da variável privada desejada*/
    function __construct() {

    }
    
    function getIdprofessor() {
        return $this->idprofessor;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getNomeProfessor() {
        return $this->nomeProfessor;
    }

    function getSalarioHora() {
        return $this->salarioHora;
    }

    function getEmail() {
        return $this->email;
    }

    function getCurriculo() {
        return $this->curriculo;
    }

    function getFoto() {
        return $this->foto;
    }

    function getStatus() {
        return $this->status;
    }

    function getCoordenardor() {
        return $this->coordenardor;
    }

    function getPF() {
        return $this->PF;
    }

}
