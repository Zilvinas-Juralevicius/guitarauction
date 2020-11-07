<?php

use KCS\Edit;

require_once __DIR__.'/../vendor/autoload.php';

$conn = new PDO('mysql:host=localhost;dbname=guitarauction', 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$action = $_GET['action'] ?? null;
$format = $_GET['format'] ?? 'html';

$delObj = new Edit($conn);
$delObj->viewCreateForm();
