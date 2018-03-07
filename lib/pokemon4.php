<?php
/**
 *
 */
class Pokemon4 extends Pokemon3
{

  private $rareza=0;

  function __construct($nombre,$tipo,$poder,$nivel,$vida,$rareza){

    parent:: __construct($nombre,$tipo,$poder,$nivel,$vida);
    $this->rareza=$rareza;
  }

    public function getRareza(){
        return $this->rareza;
    }

    public function setRareza($rareza){
        $this->rareza = $rareza;
        return $this;
    }
    public function calcularRareza(){
    $this->rareza=rand(1,10);
    return $this->rareza;
    }
  }
  ?>
