<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__."/file.txt";

if(file_exists($file) && is_file($file)) {
    echo "<p>O arquivo ja existe</p>";
}else {
    echo "<p>is not exists</p>";
}


/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if(!file_exists($file) || !is_file($file)) {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "linha01" . PHP_EOL);
    fwrite($fileOpen, "linha02" . PHP_EOL);
    fwrite($fileOpen, "linha03" . PHP_EOL);
    fwrite($fileOpen, "Este e um texto de teste" . PHP_EOL);
    fclose($fileOpen);
}else {
    var_dump(
        file($file),
        pathinfo($file)
    );
}

echo "<p>",file($file)[3],"</p>";

$open = fopen($file, "r");
while(!feof($open)) {
    echo"<p>".fgets($open)."</p>";
}

fclose($open);


/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__."/teste2.txt";
if(file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents);
}else {
    $data = "<article><h1>Guilherme</h1><p>Dev Junior Full stack<br>Laravel and VUEJS</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

unlink($getContents);
unlink($file);

if(file_exists(_DIR__."/teste3.txt") && is_file(__DIR__."/teste3.txt")) {
    unlink(__DIR__."teste3.txt");
}
