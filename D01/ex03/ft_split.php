<?PHP
    function    ft_split($str)
    {
        $split = preg_split("/\s+/", trim($str));
        sort($split);
        return ($split);
    }
?>
