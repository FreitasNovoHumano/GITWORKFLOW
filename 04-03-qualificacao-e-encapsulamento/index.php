<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";

$appTemplate = new App\Template();//informando onde se encontra o obj
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use App\Template;
use Web\Template As WebTemplate;//Renomenado através do AS para n ter conflitos

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);


/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/source/Qualifield/User.php";

$user = new \source\Qualifield\User();

//$user->firstName = "Fábio";//Obj manipulado
//$user->lastName = "Freitas";

//$user->setFirstName("Fábio");
//$user->setLastName("Freitas");

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}!</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$fabio = $user->setUser(
    "Fábio", 
    "Freitas", 
    "curso@upinside.com.br"
);

if(!$fabio){
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$kaue = new \source\Qualifield\User();
$kaue->setUser(
    "Kaue", 
    "Cardoso",
    "curso@upinside.com.br"
);

$gah = new \source\Qualifield\User();
$gah->setUser(
    "Gah", 
    "Morandi",
    "curso@upinside.com.br"
);

var_dump(
    $user,
    $kaue,
    $gah
);
