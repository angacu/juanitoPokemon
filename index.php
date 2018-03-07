<?php
  include "./lib/pokemon.php";
    include "./lib/pokemon2.php";
    include "./lib/pokemon3.php";
    include "./lib/pokemon4.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pokemaniaco</title>
  </head>
  <body>
    <?php
      // primer Pokemon
      echo "<b>Primer Pokemon de mi Equipo Pokemon y Pokemons de los Pokemons</b>";
      echo "<br>";
      echo "<br>";
      $pokemon= new Pokemon (0,0,0);
      $pokemon->setNombre("Juanitopollas");
      $devolverNombre=$pokemon->getNombre();
      $pokemon->setTipo('Tocahuevos nivel Experto');
      $devolverTipo=$pokemon->getTipo();
      $legendario=$pokemon->poderRandom();
      $devolverPoder=$pokemon->getPoder();
      $calcularPoder=$pokemon->legendario();
      echo "<br>";
      echo "<b>Nombre Pokemon</b> = ".$devolverNombre;
      echo "<br>";
      echo "<b>Tipo de Pokemon</b> = ".$devolverTipo;
      echo "<br>";
      echo "<b>Poder del Pokemon</b> = ".$devolverPoder;
      echo "<br>";

      // primer Pokemon
      echo "<hr>";
      echo "<b>Segundo Pokemon de mi Equipo Pokemon y Pokemons de los Pokemons</b>";
      echo "<br>";
      echo "<br>";
      $pokemon2= new Pokemon2 (0,0,0,0);
      $pokemon2->setNombre("JuanitoConPatas");
      $devolverNombre=$pokemon2->getNombre();
      $pokemon2->setTipo('Fuego');
      $devolverTipo=$pokemon2->getTipo();
      $legendario=$pokemon2->poderRandom();
      $devolverPoder=$pokemon2->getPoder();
      $calcularPoder=$pokemon2->legendario();
      $nivelTotal=$pokemon2->calcularNivel();
      echo "<br>";
      echo "<b>Nombre Pokemon</b> = ".$devolverNombre;
      echo "<br>";
      echo "<b>Tipo de Pokemon</b> = ".$devolverTipo;
      echo "<br>";
      echo "<b>Poder del Pokemon</b> = ".$devolverPoder;
      echo "<br>";
      echo "<b>Nivel del Pokemon</b> = ".$nivelTotal;
      echo "<br>";

      // primer Pokemon
      echo "<hr>";
      echo "<b>Tercer Pokemon de mi Equipo Pokemon y Pokemons de los Pokemons</b>";
      echo "<br>";
      echo "<br>";
      $pokemon3= new Pokemon3 (0,0,0,0,0);
      $pokemon3->setNombre("JuanitoTostarica");
      $devolverNombre=$pokemon3->getNombre();
      $pokemon3->setTipo('Galleta');
      $devolverTipo=$pokemon3->getTipo();
      $legendario=$pokemon3->poderRandom();
      $devolverPoder=$pokemon3->getPoder();
      $calcularPoder=$pokemon3->legendario();
      $nivelTotal=$pokemon3->calcularNivel();
      $vidaTotal=$pokemon3->calcularVida();
      echo "<br>";
      echo "<b>Nombre Pokemon</b> = ".$devolverNombre;
      echo "<br>";
      echo "<b>Tipo de Pokemon</b> = ".$devolverTipo;
      echo "<br>";
      echo "<b>Poder del Pokemon</b> = ".$devolverPoder;
      echo "<br>";
      echo "<b>Nivel del Pokemon</b> = ".$nivelTotal;
      echo "<br>";
      echo "<b>Vida del Pokemon</b> = ".$vidaTotal;
      echo "<br>";

      // primer Pokemon
      echo "<hr>";
      echo "<b>Cuarto Pokemon de mi Equipo Pokemon y Pokemons de los Pokemons</b>";
      echo "<br>";
      echo "<br>";
      $pokemon4= new Pokemon4 (0,0,0,0,0,0);
      $pokemon4->setNombre("JuanitoAerodactil");
      $devolverNombre=$pokemon4->getNombre();
      $pokemon4->setTipo('Tronista de MHYV');
      $devolverTipo=$pokemon4->getTipo();
      $legendario=$pokemon4->poderRandom();
      $devolverPoder=$pokemon4->getPoder();
      $calcularPoder=$pokemon4->legendario();
      $nivelTotal=$pokemon4->calcularNivel();
      $vidaTotal=$pokemon4->calcularVida();
      $rarezaPokemon=$pokemon4->calcularRareza();
      echo "<br>";
      echo "<b>Nombre Pokemon</b> = ".$devolverNombre;
      echo "<br>";
      echo "<b>Tipo de Pokemon</b> = ".$devolverTipo;
      echo "<br>";
      echo "<b>Poder del Pokemon</b> = ".$devolverPoder;
      echo "<br>";
      echo "<b>Nivel del Pokemon</b> = ".$nivelTotal;
      echo "<br>";
      echo "<b>Vida del Pokemon</b> = ".$vidaTotal;
      echo "<br>";
      echo "<b>Rareza del Pokemon</b> = ".$rarezaPokemon;
      echo "<br>";
 ?>
