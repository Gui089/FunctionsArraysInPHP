<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.04 - Carregamento automático");


/*
 * [ autoload spl psr-4 ] Carregamento de suas classes com spl_autoload psr-4
 */
fullStackPHPClassSession("autoload spl psr-4", __LINE__);

//require __DIR__."/source/Loading/User.php";
//require __DIR__."/source/Loading/Adress.php";
//require __DIR__."/source/Loading/Company.php";

require __DIR__."/source/autoload.php";
require __DIR__."/source/vendor/autoload.php";


$user = new \source\Loading\User();
$adress = new \source\Loading\Adress();
$company = new \source\Loading\Company();

var_dump(
    $user,
    $adress,
    $company
);




/*
 * [ autoload composer psr-4 ] https://getcomposer.org/doc/00-intro.md
 */
fullStackPHPClassSession("autoload composer psr-4", __LINE__);

require __DIR__."/source/vendor/autoload.php";

$email = new \PHPMailer\PHPMailer\PHPMailer();

//var_dump($email);












