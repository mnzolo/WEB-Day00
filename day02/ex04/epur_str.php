#!/usr/bin/php

<?php
    $j = 1;
    $i = 0;

 while ($argv[$j][$i] == ' ')
    {
        $i++;
    }
    while ($argv[$j][$i])
    {
        while ($argv[$j][$i] != ' ' && $argv[$j][$i])
        {
            echo $argv[$j][$i];
            $i++;
        }
        if ($argv[$j][$i + 1] == ' ' && $argv[$j][$i])
        {
            echo ' ';
        }
        while ($argv[$j][$i] == ' ' && $argv[$j][$i])
        {
            $i++;
        }
        if (argv[$j][$i])
        {
            break;
        }
    }
?>