<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>

<div class="container">
    <div class="card">
        <h2>Ticket Details</h2>

        <p><strong>Name:</strong> <?= htmlspecialchars($ticket['full_name']); ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($ticket['email']); ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars($ticket['phone']); ?></p>
        <p><strong>Ticket Code:</strong> <?= $ticket['ticket_code']; ?></p>
        <p><strong>Status:</strong> 
            <?= $ticket['checked_in'] ? "Checked In" : "Not Checked In"; ?>
        </p>

        <a href="index.php?action=list">
            <button>Back to List</button>
        </a>
    </div>
</div>

<?php include "partials/footer.php"; ?>