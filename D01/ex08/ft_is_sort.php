#!/usr/bin/php
<?PHP
    function    ft_is_sort(array $tab)
    {
        $old = $tab;
        sort($tab);
        foreach ($tab as $key=>$value)
            if ($value != $old[$key])
                return (0);
        return (1);
    }
?>