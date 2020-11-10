<?php

use KCS\View;
use KCS\Render;
use KCS\Update;
use KCS\Edit;

require_once __DIR__ . '/../vendor/autoload.php';

$log = new Monolog\Logger('Baigiamasis_darbas');
$log->pushHandler(
    new Monolog\Handler\StreamHandler(
        __DIR__ . '/../logs/erro.log',
        Monolog\Logger::INFO));

$log->info('Aplikacija pradejo darba');

try {

    $conn = new PDO('mysql:host=localhost;dbname=guitarauction', 'zilvinas', 'pankas');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $action = $_GET['action'] ?? null;
    $format = $_GET['format'] ?? 'html';

    switch ($action) {
//        case 'View':
//            $delObj = new View($conn);
//            $delObj->viewGuitars($_GET['id']);
//            break;
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
            $guitar = (new View($conn))->viewGuitars();
            Render::spausdinti($guitar, $format);

    }
} catch (\Exception $exception) {
    echo "\n\nKlaida. Prasom bandyti dar karta.";
    $log->warning($exception->getMessage());
}
