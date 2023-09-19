<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
  "AC/DC",
  "Nirvana",
  "Alter Bridge",
];

$assoc = [
   "band1" => "AC/DC",
    "band2" => "Nirvana",
    "band3" => "Alter Bridge",
];

array_unshift($index, "", "Pearl Jam");
$assoc = ["band4" => "Pearl Jam", "band5" => "Guns n roses"] + $assoc;

array_push($index, "");
$assoc = $assoc + ["band_6" => ""];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump([
    $index,
    $assoc
]);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
krsort($index);

sort($index);
rsort($index);


var_dump([
    $index,
    $assoc
]);


/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc)
]);

if(in_array("AC/DC", $assoc)) {
    echo"<p>Cause I`m back!</p>";
}

$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}}</p>";

var_dump(explode(", ", $arrToString));


/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
   "name" =>"Guilherme",
   "company" => "Upinside",
   "mail" => "cursos@upinside.com.br"
];

$template = <<<TPL
  <article>
    <h1>{{name}}</h1>
    <p>{{company}}</p>
    <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar E-mail</a>
</article>
TPL;

echo  $template;

echo str_replace(
   array_keys($profile), array_values($profile), $template
);

$replaces = "{{".implode("}}&{{", array_keys($profile)) . "}}";

//var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);

$dataProfile = [
  "Nome" => "Guilherme",
  "Email" => "guilhermesilva@gmail.com"
];

$testesDocs = <<<TST
 <form>
    <input type="text" placeholder=" {{Nome}}">
    <input type="email" placeholder="{{Email}}">
    <button type="submit">Enviar</button>
</form>
TST;

echo $testesDocs;

echo str_replace(
    array_keys($dataProfile),
    array_values($dataProfile), $testesDocs
);

$recorte = "{{" . implode("}}&{{", array_keys($dataProfile)) ."}}";

echo str_replace(
  explode("&", $recorte),
  array_values($dataProfile),
  $testesDocs
);

