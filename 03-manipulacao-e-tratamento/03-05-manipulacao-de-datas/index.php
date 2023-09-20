<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/Y H:i:s")
]);

define("DATE_BR", "d/m/Y h:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
    date_default_timezone_get(),
    date(DATE_BR),
]);

var_dump(getdate());

echo"<p>Hoje e dia", getdate()["mday"], " !</p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
    "strtotime NOW" =>strtotime("now"),
    "time" =>time(),
    "strtotime+10d" =>strtotime("+10days"),
    "date DATE_BR" =>date(DATE_BR),
    "date +10days" =>date(DATE_BR, strtotime("+10days")),
]);

$format = "%d/%m/%Y %Hh%M ";
echo "<p>A data de hoje e ", strftime($format), "</p>";
echo strftime("<p>Hoje e dia %d do %m de %Y as %H horas e %M minutos</p>");