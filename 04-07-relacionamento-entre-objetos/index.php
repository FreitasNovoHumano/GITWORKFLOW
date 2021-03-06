<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \Source\Related\Company();
$company->bootCompany(
    "UpInside", 
    "Nome da rua"
);

var_dump($company);

$address = new \Source\Related\Address("Drº Antônio Luiz Moura Gonzaga ", 3399, 
        "Bloco A sala 2010");
$company->boot(
    "UpInside",
    $address     
);

var_dump($company);

echo "<p>{$company->getCompany()} tem sede na rua "
. "{$company->getAddress()->getStreet()} no número "
. "{$company->getAddress()->getNumber()} de complemento "
. "{$company->getAddress()->getComplement()}</p>";


/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$fsphp = new \Source\Related\Product("Full Stack PHP", 1997);
$laradev = new \Source\Related\Product("Laravel Developer", 997);

var_dump($fsphp, $laradev);

$company->addProduct($fsphp);
$company->addProduct($laradev);
//Não há necessidade de armazenar um obj para construi-lo. Pode ser direto!
$company->addProduct(
    new \Source\Related\Product("Work Control Dev", 2997)
);

var_dump($company);

/**
 * @var \Source\Related\Product $product
 */

foreach ($company->getProducts() as $product){
    echo "<p>{$product->getname()} por R$ {$product->getPrice()}</p>";
}


/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Robson", "Leite");
$company->addTeamMember("Manager", "Kaue", "Cardoso");
$company->addTeamMember("Support", "Gah", "Morandi");
$company->addTeamMember("Producer", "Gustavo", "Santos");
$company->addTeamMember("Designer", "João", "A");
$company->addTeamMember("Estudent", "Fábio", "Freitas");

var_dump($company);


foreach ($company->getTeam() as $member){
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}











