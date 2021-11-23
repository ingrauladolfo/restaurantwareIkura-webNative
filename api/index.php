<?php
phpinfo();
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
require_once __DIR__.'/../index.php';