<?php

if (!function_exists('number_format_suffix'))
{
    function number_format_suffix($num, $html_mode = false)
    {
        // format suffix
        $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
        if (($num % 100) >= 11 and ($num % 100) <= 13)
        {
           $suffix = 'th';
        }
        else
        {
           $suffix = $ends[$num % 10];
        }

        // format number
        $num = number_format($num);

        // return
        return $html_mode ? $num.'<sup>'.$suffix.'</sup>' : $num.$suffix;
    }
}