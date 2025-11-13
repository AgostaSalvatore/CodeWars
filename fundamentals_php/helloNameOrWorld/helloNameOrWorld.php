<?php

function hello($name = ''): string
{
    if ($name == '') {
        return 'Hello, World!';
    } else {
        $name = ucfirst(strtolower($name));
        return 'Hello, ' . $name;
    }
}

echo hello('AlicE');
