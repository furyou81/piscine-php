#!/usr/bin/php
<?PHP
    static $a;
    if ($argc == 2)
    {
        if ($argv[1] === "mais pourquoi cette demo ?")
            echo "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
        else if ($argv[1] === "mais pourquoi cette chanson ?")
            echo "Parce que Kwame a des enfants\n";
        else if ($argv[1] === "vraiment ?")
        {
            if ($a > 0)
                echo "Oui il a vraiment des enfants\n";
            echo "Nan c'est parce que c'est le premier avril\n";
            $a++;
        }
    }
?>