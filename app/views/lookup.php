<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>

<div class="container">
    <div class="card">
        <h2>Lookup Ticket</h2>

        <form method="GET" action="">
            <label>Enter Ticket Code</label>
            <input type="text" name="code" required>
            <button type="submit">Search</button>
        </form>

        <?php
        if(isset($_GET['code'])) {
            require_once "../config/database.php";
            $db = new Database();
            $conn = $db->connect();

            $stmt = $conn->prepare("SELECT * FROM tickets WHERE ticket_code=?");
            $stmt->bind_param("s", $_GET['code']);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                $ticket = $result->fetch_assoc();
                echo "<hr>";
                echo "<p><strong>Name:</strong> " . htmlspecialchars($ticket['full_name']) . "</p>";
                echo "<p><strong>Status:</strong> " . 
                     ($ticket['checked_in'] ? "Checked In" : "Not Checked In") 
                     . "</p>";
            } else {
                echo "<p style='color:red;'>Ticket not found.</p>";
            }
        }
        ?>
    </div>
</div>

<?php include "partials/footer.php"; ?>