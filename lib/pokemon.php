<?php
/**
 *
 */
class Pokemon
{
  private $nombre="";
  private $tipo="";
  private $poder=0;

  function __construct($nombre,$tipo,$poder){
    $this->nombre=$nombre;
    $this->tipo=$tipo;
    $this->poder=$poder;
  }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }
    public function poderRandom(){
    $this->poder=rand(1,3000);
    return $this->poder;
      }

      public function legendario(){
        if ($this->poder > 2600) {
          echo "<b>POKEMON LEGENDARIO :)</b>";
          echo "<br>";
        }else {
            echo "Truño de pokemon :(";
            echo "<br>";
          }
        }

      public function getPoder(){
          return $this->poder;
      }

      public function setPoder($poder){
          $this->poder = $poder;
          return $this;
      }
}
 ?>
