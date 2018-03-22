#!/usr/bin/php
<?PHP
    $cleaned = trim(preg_replace("/[ ]+/", " ", $argv[1]), " ");
    if ($argc > 1)
        echo $cleaned . "\n";
?>