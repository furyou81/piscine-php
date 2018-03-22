#!/usr/bin/php
<?PHP
    function    ft_cmp($c1, $c2)
    {
        if (ord($c1) >= 65 && ord($c1) <= 90)
            $c1 = ord($c1) + 32 - 1000;
        else if (ord($c1) >= 97 && ord($c1) <= 123)
            $c1 = ord($c1) - 1000;
        else if (ord($c1) >= 48 && ord($c1) <= 57)
            $c1 = ord($c1) - 500;
        else
            $c1 = ord($c1);
        if (ord($c2) >= 65 && ord($c2) <= 90)
            $c2 = ord($c2) + 32 - 1000;
        else if (ord($c2) >= 97 && ord($c2) <= 123)
            $c2 = ord($c2) - 1000;
        else if (ord($c2) >= 48 && ord($c2) <= 57)
            $c2 = ord($c2) - 500;
        else
            $c2 = ord($c2);
        return ($c1 - $c2);
    }
    function    ft_strcmp($s1, $s2)
    {
        $i = 0;

        //if ($s1 == 0 || $s2 == 0)
          //  return (-1);
        while (ord($s1[$i]) == ord($s2[$i]))
            $i++;
        return (ft_cmp($s1[$i], $s2[$i]));
    }
    if ($argc > 1)
    {
        $tab = [];
        $i = 1;
        while ($i < $argc)
        {
            $split = preg_split("/[ ]+/", trim($argv[$i], " "));
            $tab = array_merge($split, $tab);
            $i++;
        }
        usort($tab, "ft_strcmp");
        foreach ($tab as $t)
           echo $t . "\n";
}
?>