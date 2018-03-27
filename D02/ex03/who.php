#!/usr/bin/php
<?PHP
date_default_timezone_set('Europe/Paris');
    $file = "";
    $input = fopen("/var/run/utmpx", 'r');
    $tab = [];
    $bin = [];
    while ($data = fread($input, 628))
    {
        array_push($bin, $data);
        //$tab = unpack("C256user_name", $data);
    }
    print_r($bin);
    $final = [];
    foreach($bin as $b)
    {
        $name = "";
        $id = "";
        $tty = "";
        $pid = 0;
        $ut = "";
        $time = "";
        $host = "";
        $sec = 0;
        $nsec = "";
        $i = 0;
        while ($i < 256)
            $name .= $b[$i++];
        while ($i < 256 + 4)
            $id .= $b[$i++];
        while ($i < 256 + 4 + 32)
            $tty .= $b[$i++];
            $j = 4;
        while ($i < 256 + 4 + 32 + 4)
        {
            $pid = ($pid * $j * 8) + $b[$i++];
            $j--;
        }
        while ($i < 256 + 4 + 32 + 4 + 2)
            $ut .= $b[$i++];
            $j = 7;
        while ($i < 256 + 4 + 32 + 4 + 2 + 8)
        {
            $sec = $sec + (intval($b[$i]) << ($j * 8));
            $j--;
            $i++;
            //$sec .= $b[$i++];
        }
        while ($i < 256 + 4 + 32 + 4 + 2 + 8 + 8)
            $nsec .= $b[$i++];
        while ($i < 256 + 4 + 32 + 4 + 2 + 16 + 256)
            $host .= $b[$i++];
            echo date('M/d/Y H:i:s', $sec) . "\n";
        echo $name . " " .$id . " " . $tty . " " .$pid . " ut:" .$ut . " time:" . $sec . " / " . $nsec . " host:" . $host ."\n";
    }
    /*while ($tmp = fgets($input))
        $file .= $tmp;
        //echo $file . "\n";
    fclose($input);
    $test = unpack("C*", $file);
    print_r ($test);
    foreach ($test as $t)
    {
        if ($t != 0)
        echo chr($t);
    }*/
    //echo shell_exec("who") . "\n";
?>