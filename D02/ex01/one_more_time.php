#!/usr/bin/php
<?PHP
    date_default_timezone_set("Europe/Brussels");
    ini_set('date.timezone', 'Europe/Brussels');
    if (preg_match("/^(Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche){1} (0[1-9]|[1-2][0-9]|[3][0-1]) (Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet|Aout|Septembre|Octobre|Novembre|Decembre){1} (19[7-9][0-9]|20[0-6][0-9]) (0[0-2]|1[0-9]|2[0-3])(:[0-5][0-9]){2}$/", $argv[1]))
    {
        $month = array("Janvier"=>1, "Fevrier"=>2, "Mars"=>3, "Avril"=>4, "Mai"=>5, "Juin"=>6, "Juillet"=>7, "Aout"=>8, "Septembre"=>9,"Octobre"=>10, "Novembre"=>11, "Decembre"=>12);
        $tab = preg_split("/ /", $argv[1]);
        $YY = intval($tab[3]);
        $MM = intval($month[$tab[2]]);
        $DD = intval($tab[1]);
        if (!checkdate($MM, $DD, $YY))
            echo "Wrong Format";
        else
        {
            $tab2 = preg_split("/:/", $tab[4]);
            $hh = intval($tab2[0]);
            $mm = intval($tab2[1]);
            $ss = intval($tab2[2]);
            date_default_timezone_set(128);
            echo mktime($hh, $mm, $ss, $MM, $DD, $YY) . "\n";
        }
    }
    else
        echo "Wrong Format";
?>