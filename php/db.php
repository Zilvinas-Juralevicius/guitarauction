<?php

use KCS\View;
use KCS\Render;
use KCS\Update;
use KCS\Edit;

require_once __DIR__.'/../vendor/autoload.php';

$conn = new PDO('mysql:host=localhost;dbname=guitarauction', 'zilvinas', 'pankas');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$action = $_GET['action'] ?? null;
$format = $_GET['format'] ?? 'html';

switch ($action){
    case 'View':
        $delObj = new View($conn);
        $delObj->viewPerson($_GET['id']);
        break;
    case 'Update':
        $delObj = new Update($conn);
        $delObj->updatePerson($_POST);
        break;
    case 'Store':
        $delObj = new Update($conn);
        $delObj->createPerson($_POST);
        break;
    case 'Create':
        $delObj = new Edit($conn);
        $delObj->viewCreateForm();
        break;
    default:
        $guitar = (new View($conn))->visi();
        Render::spausdinti($guitar, $format);
}
