<?php
// with implode
// function greet(){
//   $spellHello=['h','e','l','l','o'];
//   $spellWorld=['w','o','r','l','d'];
//   $spellMark =['!'];

//   $helloWorldWithArray= implode('', $spellHello) ." ".  implode('', $spellWorld) . implode($spellMark);

//   return $helloWorldWithArray;
// }

// with multiple foreach
function greet()
{
    $spellHello    = ['h', 'e', 'l', 'l', 'o'];
    $spellWorld    = ['w', 'o', 'r', 'l', 'd'];
    $spellMark     = ['!'];
    $finalSentence = '';

    foreach ($spellHello as $helloLetter) {
        $finalSentence .= $helloLetter;
    }

    $finalSentence .= ' ';

    foreach ($spellWorld as $worldLetter) {
        $finalSentence .= $worldLetter;
    }

    foreach ($spellMark as $markLetter) {
        $finalSentence .= $markLetter;
    }

    return $finalSentence;
}

echo greet();
?>