<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full stack PHP");
const AUTHOR = "GUILHERME";

$formatio = true;
if($formatio) {
    define("COURSE_TYPE", "Formacao");
}else {
    define("COURSE_TYPE", "Curso");
}

echo "<p>", COURSE_TYPE, " ", COURSE, " de ", AUTHOR, "</p>";




/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);


