<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conectar
 *
 * @author jairb
 */
class conectar {
    //put your code here
    
    
    private  $dbtype   = "mysql";
    private  $host     = "mysql427.umbler.com:41890";
    private $port     = "3306";
    private  $user     = "swap";
    private  $password = "swap2017";
    private  $db       = "swapbd";

	private function connect(){
		
            $link = mysqli_connect($this->host, $this->user, $this->password, $this->db, $this->port);
		if($link)
                    return $link;
                else {
                    return NULL;
                }
	}
	
	private function disconnect($link){
            mysqli_close($link);
	}
	
	/*Método select que retorna um VO ou um array de objetos*/
	
	/*Método insert que insere valores no banco de dados e retorna o último id inserido*/
	public function executar($sql){
            $link = $this->connect();
            
            if($link){
                mysqli_query($link, $sql);
                $this->disconnect($link);
            }
        }

	
    
}
