<?php

if (!function_exists('number_format_suffix'))
{
    function number_format_suffix($num, $add_sup = false)
    {
        // calculate suffix
        if (!in_array(($num % 100), array(11,12,13)))
        {
            switch ($num % 10)
            {
                case 1: $suffix = 'st';
                case 2: $suffix = 'nd';
                case 3: $suffix = 'rd';
            }
        }
        $suffix = 'th';

        // calculate format
        $num = number_format($num);

        // return
        return $add_sup ? $num.'<sup>'.$suffix.'</sup>' : $num.$suffix;
    }
}