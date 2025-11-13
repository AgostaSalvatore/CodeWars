<?php
$words = [];

function smash(array $words): string
{
    echo 'quante parole vuoi aggiungere? ';
    $n = readline();
    for ($i = 0; $i < $n; $i++) {
        echo 'inserisci la parola ' . ($i + 1) . ': ';
        $word    = readline();
        $words[] = $word;
    }
    return implode(' ', $words);
}

echo smash($words);
