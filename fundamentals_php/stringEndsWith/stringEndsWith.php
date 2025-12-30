<?php

function solution($str, $ending)
{
    $lenEnding = strlen($ending);
    $lenStr    = substr($str, -$lenEnding);

    if ($lenEnding == $lenStr) {
        return true;
    } else {
        return false;
    }
}


