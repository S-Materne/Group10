<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>

<div class="container">
    <div class="card">
        <h2>All Tickets</h2>

        <table class="tab" border="1" width="100%" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Ticket Code</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>

            <?php while($row = $tickets->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['full_name']); ?></td>
                <td><?= htmlspecialchars($row['email']); ?></td>
                <td><?= $row['ticket_code']; ?></td>
                <td>
                    <?= $row['checked_in'] ? "Checked In" : "Pending"; ?>
                </td>
                <td>
                    <a href="index.php?action=view&id=<?= $row['id']; ?>">View</a> |
                    <a href="index.php?action=edit&id=<?= $row['id']; ?>">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>

        </table>
    </div>
</div>

<?php include "partials/footer.php"; ?>