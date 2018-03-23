#!/usr/bin/php
<?PHP // DIVISION PAR ZERO ET MODULO trim not tab
    $i = 0;
    $nb1 = "";
    $nb2 = "";
    $op = "";

    if ($argc != 2)
        echo "Incorrect Parameters\n";
    else
    {
        while ($argv[1][$i] == " ")
            $i++;
        while (ord($argv[1][$i]) >= 48 && ord($argv[1][$i]) <= 57)
            $nb1 .= $argv[1][$i++];
        while ($argv[1][$i] == " ")
            $i++;
        if ($argv[1][$i] == "+")
            $op = "+";
        else if ($argv[1][$i] == "-")
            $op = "-";
        else if ($argv[1][$i] == "*")
            $op = "*";
        else if ($argv[1][$i] == "/")
            $op = "/";
        else if ($argv[1][$i] == "%")
            $op = "%";
        else
            echo "Syntax Error\n";
            $i++;
        while ($argv[1][$i] == " ")
            $i++;
        while (ord($argv[1][$i]) >= 48 && ord($argv[1][$i] <= 57))
            $nb2 .= $argv[1][$i++];
        while ($argv[1][$i] == " ")
            $i++;
        if ($op == "+")
            echo $nb1 + $nb2;
        else if ($op == "-")
            echo $nb1 - $nb2;
        else if ($op == "*")
            echo $nb1 * $nb2;
        else if ($op == "/")
            echo $nb1 / $nb2;
        else if ($op == "%")
            echo $nb1 % $nb2;
        //if ($argv[$i] != '\0')
        //echo "Syntax Error\n";
    }
?>