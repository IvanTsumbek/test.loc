<?php

return [
    'host' => '127.127.126.26',
    'dbname' => 'test',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8', // utf8mb4
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ],
];
