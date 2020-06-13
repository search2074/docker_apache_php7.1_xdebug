<?php

$v = scandir('/var/www/html');
var_dump($v);

header('Content-type: application/json');
echo json_encode([
    'message' => 'Hello man!'
]);