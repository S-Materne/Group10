<?php
require_once "../config/database.php";

class Ticket {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function create($name, $email, $phone, $code) {
        $stmt = $this->conn->prepare(
            "INSERT INTO tickets (full_name, email, phone, ticket_code) VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param("ssss", $name, $email, $phone, $code);
        return $stmt->execute();
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM tickets ORDER BY id DESC");
    }

    public function find($id) {
        $stmt = $this->conn->prepare("SELECT * FROM tickets WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $name, $email, $phone) {
        $stmt = $this->conn->prepare(
            "UPDATE tickets SET full_name=?, email=?, phone=? WHERE id=?"
        );
        $stmt->bind_param("sssi", $name, $email, $phone, $id);
        return $stmt->execute();
    }

    public function stats() {
        $total = $this->conn->query("SELECT COUNT(*) as total FROM tickets")->fetch_assoc();
        $checked = $this->conn->query("SELECT COUNT(*) as checked FROM tickets WHERE checked_in=1")->fetch_assoc();
        return [$total['total'], $checked['checked']];
    }
}