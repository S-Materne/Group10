<?php
require_once "../config/database.php";
require_once "../app/controllers/TicketController.php";

$controller = new TicketController();

$action = $_GET['action'] ?? 'home';

switch($action) {
    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store();
        break;

    case 'list':
        $controller->index();
        break;

    case 'view':
        $controller->view($_GET['id']);
        break;

    case 'edit':
        $controller->edit($_GET['id']);
        break;

    case 'update':
        $controller->update($_POST['id']);
        break;

    case 'dashboard':
        $controller->dashboard();
        break;

    case 'lookup':
        $controller->lookup();
        break;

    default:
        $controller->home();
}
?>