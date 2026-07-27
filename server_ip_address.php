<?php

header('Content-Type: application/json');

$data = [
    'REMOTE_ADDR'            => $_SERVER['REMOTE_ADDR'] ?? null,
    'HTTP_X_FORWARDED_FOR'   => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? null,
    'HTTP_CLIENT_IP'         => $_SERVER['HTTP_CLIENT_IP'] ?? null,
    'HTTP_CF_CONNECTING_IP'  => $_SERVER['HTTP_CF_CONNECTING_IP'] ?? null,
    'SERVER_ADDR'            => $_SERVER['SERVER_ADDR'] ?? null,
    'SERVER_NAME'            => $_SERVER['SERVER_NAME'] ?? null,
    'SERVER_HOST_IP'         => gethostbyname($_SERVER['SERVER_NAME'] ?? ''),
];

echo json_encode($data, JSON_PRETTY_PRINT);

exit;