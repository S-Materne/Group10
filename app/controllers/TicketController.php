<?php
require_once "../app/models/Ticket.php";

class TicketController {

    private $ticket;

    public function __construct() {
        $this->ticket = new Ticket();
    }

    public function home() {
        include "../app/views/home.php";
    }

    public function create() {
        include "../app/views/create.php";
    }

    public function store() {

        $name = trim($_POST['full_name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);

        if(empty($name) || empty($email) || empty($phone)) {
            die("All fields are required.");
        }

        $code = strtoupper(uniqid("INES"));

        $this->ticket->create($name, $email, $phone, $code);

        header("Location: index.php?action=list");
    }

    public function index() {
        $tickets = $this->ticket->getAll();
        include "../app/views/list.php";
    }

    public function view($id) {
        $ticket = $this->ticket->find($id);
        include "../app/views/view.php";
    }

    public function edit($id) {
        $ticket = $this->ticket->find($id);
        include "../app/views/edit.php";
    }

    public function update($id) {
        $this->ticket->update(
            $id,
            $_POST['full_name'],
            $_POST['email'],
            $_POST['phone']
        );

        header("Location: index.php?action=list");
    }

    public function dashboard() {
        $stats = $this->ticket->stats();
        include "../app/views/dashboard.php";
    }

    public function lookup() {
        include "../app/views/lookup.php";
    }
}
?>