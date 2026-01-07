<?php

function solution($str, $ending)
{
    $lenEnding = strlen($ending);

    if ($lenEnding == 0) {
        return true;
    }

    $substring = substr($str, -$lenEnding);

    return $substring == $ending;
}
