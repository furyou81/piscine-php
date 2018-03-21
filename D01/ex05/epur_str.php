#!/usr/bin/php
<?PHP
    if ($argc == 2)
    {
        $tmp = preg_replace("/[ ]+/", " ", $argv[1]);
        echo $tmp . "\n";
    }
?>