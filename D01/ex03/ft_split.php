<?PHP
    function    ft_split($str)
    {
        $split = preg_split("/[ ]+/", $str);
        sort($split);
        return ($split);
    }
?>