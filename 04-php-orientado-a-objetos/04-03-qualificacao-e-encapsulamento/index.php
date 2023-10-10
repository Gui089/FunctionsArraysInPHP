<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";

$appTemplate = new \App\Template();
$webTemplate = new \Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use \App\Template;
use \Web\Template as WebTemplate;

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

$user = new \Source\Qualifield\User();

//$user->setFirstName("Guilherme");
//$user->setLastName("Coutinho");



var_dump(
    $user,
    get_class_methods($user)
);


echo "<p>O E-mail de {$user->getFisrtName()} e {$user->getEmail()}!</p>";


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$guilherme = $user->setUser(
    "Guilherme",
    "Coutinho",
    "Gui"
);

if(!$guilherme) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$Flavia = new \Source\Qualifield\User();
$Flavia->setUser(
    "Ana Flavia",
    "Fernandes",
    "Flavia@gmail.com"
);


var_dump($user);






