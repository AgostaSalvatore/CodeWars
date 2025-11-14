<?php

function remove(string $s, int $n): string
{
    $result = '';

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] === '!' && $n > 0) {
            $n--;
        } else {
            $result .= $s[$i];
        }
    }

    return $result;
}

echo remove('!!Hello!', 3);
