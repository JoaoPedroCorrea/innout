<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'João', 'email' => 'joaocorrea666@gmail.com']);

// echo $user->getSelect();

echo User::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);
