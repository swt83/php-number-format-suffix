<?php

if (!function_exists('number_format_suffix'))
{
    function number_format_suffix($num, $html_mode = false)
    {
        // format suffix
        $suffix = null;
        if (!in_array(($num % 100), array(11,12,13)))
        {
            switch ($num % 10)
            {
                case 1: $suffix = 'st';
                case 2: $suffix = 'nd';
                case 3: $suffix = 'rd';
            }
        }
        if (!$suffix) $suffix = 'th';

        // format number
        $num = number_format($num);

        // return
        return $html_mode ? $num.'<sup>'.$suffix.'</sup>' : $num.$suffix;
    }
}
