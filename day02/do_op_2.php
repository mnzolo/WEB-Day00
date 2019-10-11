#!/usr/bin/php
<?php
    $string = trim($argv[1]);
    $value = explode(" ", $string);
    if (count($value) == 1)
    {
        if(!strpos($value, "+"))
        {
            $result = explode("+", $value);
            echo ($result[0] + $result[1]);
        }
        if(!strpos($value, "-"))
        {
            $result = explode("-", $value);
            echo ($result[0] + $result[1]);
        }
        if(!strpos($value, "*"))
        {
            $result = explode("*", $value);
            echo ($result[0] + $result[1]);
        }
        if(!strpos($value, "/"))
        {
            $result = explode("/", $value);
            echo ($result[0] + $result[1]);
        }
    }
    else
    {

    }
    print_r($value);
?>