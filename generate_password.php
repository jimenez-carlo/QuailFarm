<?php
$password = readline("enter a password: ");
$result = password_hash($password, PASSWORD_DEFAULT);

echo $result;
