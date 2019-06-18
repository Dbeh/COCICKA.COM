<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


spl_autoload_register(function ($className){
    $fileName = __DIR__.'/classes/'.$className.'.php';
    require $fileName;
});


$form = new Form();
$form->add(new InputElement('first_name', 'Имя'));
$form->add(new InputElement('last_name', 'Фамилия'));

foreach ($form as $k=>$v){
  echo $k.' - '.$v;
}

require 'form.tpl.php';
