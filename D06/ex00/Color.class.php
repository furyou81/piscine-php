#!/usr/bin/php
<?PHP
    Class Color
    {
        private $red;
        private $green;
        private $blue;
        static $verbose;

        function __construc(array $rgb)
        {
            if (array_key_exists("rgb", $rgb))
            {
            }
            else
            {
                $red = intval($rgb["red"]);
                $green = intval($rgb["green"]);
                $blue = intval($rgb["blue"]);
            }
            return ;
        }

        function __destruct()
        {
            return ;
        }

    }
?>