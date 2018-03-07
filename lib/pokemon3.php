<?php
/**
 *
 */
class Pokemon3 extends Pokemon2
{

  private $vida=0;

  function __construct($nombre,$tipo,$poder,$nivel,$vida){

    parent:: __construct($nombre,$tipo,$poder,$nivel);
    $this->vida=$vida;
  }

    public function getVida(){
        return $this->vida;
    }

    public function setVida($vida){
        $this->nivel = $nivel;
        return $this;
    }
    public function calcularVida(){
    $this->vida=rand(100,400);
    return $this->vida;
    }
  }
  ?>
