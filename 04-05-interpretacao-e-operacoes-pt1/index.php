<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user = new \Source\Interpretation\User();
$user = new \Source\Interpretation\User(
    "Fábio",
    "freitas",
    "fabiofreitas82@yahoo.com.br"
);

var_dump($user);


/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$fabio = $user;//Variável

$kaue = $fabio;//Obj fabio referênciado pelo Kaue
$kaue->setFirstName("Kaue");
$kaue->setLastName("cardoso");

$fabio->setFirstName("Fábio");
$fabio->setLastName("Freitas");

//clone cria um novo obj replicando outro obj onde se aproveita alguns 
//recursos e outros são reinicializado.
$kaue = clone $fabio; 
$kaue->setFirstName("Kaue");
$kaue->setLastName("cardoso");

$gustavo = clone $fabio;

//$kaue = null;//Forçando a destruição do obj kaue

var_dump(
    $fabio,
    $kaue,
    $gustavo
);


/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado. Também 
 * pode ser executado manualmente => $kaue = null;
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 * 
 */
fullStackPHPClassSession("__destruct", __LINE__);