<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O ultimo show do AC/DC foi incrivel";

var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mbstrlen" => mb_strlen($string),
    "substr" => substr($string, "14"),
    "strtoupper" => strtoupper($string)
]);

$textMotivationl = "Vou conseguir minha primeira vaga como dev, daqui a 6 meses!";

var_dump([
    "mb_strlen" => $textMotivationl,
    "mb_strreplace" =>str_replace(["dev", "6"], ["Full stack", "5"], $textMotivationl),

]);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
    "mb_strtoupper"=> mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER)
]);


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString. " Fui, iria novamente. ";

var_dump([
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 2),
    "mb_strstr" =>mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" =>mb_strrchr($mbReplace, ", ", true)
]);

$mbReplace = $string;
echo "<p>", $string, "</p>";
echo "<p>",str_replace("AC/DC", "Nirvana", $mbReplace) ,"</p>";
echo "<p>",str_replace(["AC/DC", "incrivel"], ["Nirvana", "Epico!" ], $mbReplace) ,"</p>";

$article = <<<ROCK
   <article>
        <h3>event</h3>
        <h3>desc</h3>
</article>
ROCK;

$articleData = [
   "event" => "Rock in Rio",
   "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);



/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);


$endPoint = "name=Robson&email=cursos@upinside.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint
]);

