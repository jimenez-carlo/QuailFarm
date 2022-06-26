<?php
$password = readline("enter a password: ");
$password_hash = readline("enter a password hash: ");
$result = password_verify($password, $password_hash);
echo $result === true ? 'valid' : 'invalid';
