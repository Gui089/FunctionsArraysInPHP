<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1><a href='index.php'>Clear</a></h1>";
echo "<p><a href='index.php?arg1=true&arg2=true'>Arguments</a></p>";

$date = [
  "name" =>"Guilherme",
  "company" => "PicPay",
   "mail" => "guilherme@gmail.com"
];

//$object = object($date);

$arguments = http_build_query($date);
echo "<p><a href='index.php?{$arguments}'>Args By Array</a></p>";




var_dump($_GET);

/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dateFilter = http_build_query([
    "name" =>"Guilherme",
    "company" => "PicPay",
    "mail" => "guilherme@gmail.com",
    "site" => "portGui.com.br",
    "script" => "<script>alert('voce foi invadido')</script>"
]);

echo "<p><a href='index.php?{$dateFilter}'>Date Filter</a></p>";

$dateUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRIPPED);
if($dateUrl) {
    if(in_array("", $dateUrl)) {
        echo "<p class='trigger warning'>Faltam dados</p>";
    }elseif (empty($dateUrl["mail"])) {
        echo "<p class='trigger warning'>Falta o E-mail!</p>";
    } elseif (!filter_var($dateUrl["mail"], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-mail inavlido</p>";
    }else {
        echo "<p class='trigger accept'>Tudo certo!</p>";
    }
}else {
    var_dump(false);
}


$dateFilter = http_build_query([
    "name" =>"Guilherme",
    "company" => "PicPay",
    "mail" => "guilherme@gmail.com",
    "site" => "portGui.com.br",
    "script" => "<script>alert('voce foi invadido')</script>"
]);

$dataPreFilter = [
    "name" =>FILTER_SANITIZE_STRING,
    "company" => "PicPay",
    "mail" => "guilherme@gmail.com",
    "site" => "portGui.com.br",
    "script" => "<script>alert('voce foi invadido')</script>"
];



var_dump($dateUrl);

