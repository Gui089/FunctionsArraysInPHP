<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" =>"Guilherme",
    "company" =>"agenciaGuilhermeDev",
    "mail" =>"guilhermesilva@gmail.com",
    "cto" =>"Flavia"
];

$objProfile = (object)$arrProfile;

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company} junto com {$objProfile->cto}</p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);

$company = new stdClass();
$company->company = "agenciaGuiDev";
$company->ceo = $ceo;
$company->maneger = new stdClass();
$company->maneger->name = "Maria";
$company->maneger->mail = "guilhermesilva@gmail.com";

var_dump($company);



/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" =>get_class($date),
    "methods" =>get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);

$exepetion =  new PDOException();

var_dump([
    "class" =>get_class($exepetion),
    "methods" =>get_class_methods($exepetion),
    "vars" => get_object_vars($exepetion),
    "parent" => get_parent_class($exepetion),
    "subclass" => is_subclass_of($exepetion, "Exception")
]);
