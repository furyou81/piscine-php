<?PHP
    function    ft_split($str)
    {
        $split = preg_split("/[ ]+/", trim($str, " "));
        sort($split);
        return ($split);
    }
?>