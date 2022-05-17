<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

/*
 * [ classe e objeto ] http://php.net/manual/pt_BR/language.oop5.basic.php
 * CLASSES: é como se fosse o designer da nossa rotina ou seja. Modelo da
 * aplicação.
 * OBJETO: interagem diretamente com o sistema e nos dá acessoa as classes!
 */
fullStackPHPClassSession("classe e objeto", __LINE__);

require __DIR__."/classes/User.php";

$user = new User();//Variável que instância a classe
var_dump($user);//Objeto user


/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.properties.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

$user->firstName = "Fábio";//Atribuindo propriedades publicas
$user->lastName = "Freitas";
$user->email = "cursos";

var_dump($user);

echo "<p>O e-mail de {$user->firstName} é {$user->email}</p>";//Lendo proprieda


/*
 * [ métodos ] São as funções que definem o comportamento e a regra de negócios de uma classe
 */
fullStackPHPClassSession("métodos", __LINE__);

$user->setFirstName("Fábio");
$user->setLastName("Freitas");
$user->setEmail("curso");

if (!$user->setEmail("curso@upinside.com.br")){
    echo "<p class='trigger erro'>O e-mail {$user->getEmail()} nÃO É VALIDO!</p>";    
}

//$user->email = "cursoa";//Alterando a propriedade manualmente

var_dump($user);
