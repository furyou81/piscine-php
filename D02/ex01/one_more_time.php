#!/usr/bin/php
<?PHP
    echo $argv[1] . "\n";
    if (preg_match("/^(Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche){1}/", $argv[1]))
        echo "ok\n";
    else
        echo "Wrong Format";
?>