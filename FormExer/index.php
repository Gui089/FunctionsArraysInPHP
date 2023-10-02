<?php
;

$form = new stdClass();
$form->name = "";
$form->mail = "";
$form->method = "get";

include __DIR__."/form.php";

$getArray = filter_input_array(INPUT_GET,FILTER_DEFAULT);



if($getArray) {
    if (in_array("" ,$getArray)){
        echo "<p style='position: absolute; ' class='mt-3 alert alert-warning'>Preencha todos os campos</p>";
    } elseif (!filter_var($getArray['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "<p style='position: absolute; ' class='mt-3 alert alert-warning'>O E-mail informado não é válido!</p>";
    }else {
        $saveStrip = array_map("strip_tags", $getArray);
        $save = array_map("trim", $saveStrip);
        echo "<p style='position: absolute; ' class='mt-3 alert alert-success'>Login efetuado com sucesso, bem-vindo {$getArray['name']}!</p>";
    }
}
