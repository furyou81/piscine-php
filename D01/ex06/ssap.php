#!/usr/bin/php
<?PHP
    $tab;
    $i = 1;
    while ($i < $argc)
    {
        $split = preg_split("/[ ]+/", $argv[$i]);
        if ($i == 1)
            $tab = $split;
        else
            $tab = array_merge($split, $tab);
        $i++;
    }
    sort($tab);
    foreach ($tab as $t)
        echo $t . "\n";
?>