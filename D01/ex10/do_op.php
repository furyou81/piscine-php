#!/usr/bin/php
<?PHP
    if ($argc > 4)
        echo "Incorrect Parameters\n";
    else
    {
        if (trim($argv[2]) == "+")
            echo ($argv[1] + $argv[3]);
        else if (trim($argv[2]) == "-")
            echo ($argv[1] - $argv[3]);
        else if (trim($argv[2]) == "*")
            echo ($argv[1] * $argv[3]);
        else if (trim($argv[2]) == "/")
            echo ($argv[1] / $argv[3]);
        else if (trim($argv[2]) == "%")
            echo ($argv[1] % $argv[3]);
    }
?> // check division par0