<?php

// creo funzione genera password
function generatePassword($pw_length)
{

    $password = '';
    // creo variabili range per lettere numeri e simboli
    $upper_chars = range('A', 'Z');
    $lower_chars = range('a', 'z');
    $numbers = range(0, 9);
    $symbols = range('!', '/');
    // prendo tutti gli elementi degli array con spread operator
    $password_chars = [...$upper_chars, ...$lower_chars, ...$numbers, ...$symbols];
    // ciclo for
    for ($i = 0; $i < $pw_length; $i++) {
        $rand = rand(0, count($password_chars) - 1);
        $password .= $password_chars[$rand];
    }
    return $password;
}
