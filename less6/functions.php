<?php

function saveUser(string $firstName, string  $lastName, string  $email, string  $password){

    $file = fopen('users.txt', 'a');

    if($file === false){
        return false;
    }

    $row = sprintf("%s\t%s\t%s\t%s\n", $firstName, $lastName, $email, $password);

    fputs($file, $row);

    fclose($file);

    return true;

}

function getUsers(){

    $file = file('users.txt');

    if($file === false){
        return false;
    }

    $parts = '<table>';

    foreach ($file as $f){
        $parts.='<tr><td>'.str_replace("\t", '</td><td>',  $f).'</td></tr>';
    }

    $parts.= '</table>';

    fclose($file);

    return $parts;

}

function getArrUsers(){

    $file = file('users.txt');

    if($file === false){
        return false;
    }

    $parts = array();

    foreach ($file as $f){
           array_push($parts,explode("\t",$f));
    }


    fclose($file);

    return $parts;

}