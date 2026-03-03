<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>

<div class="container">
    <div class="card">
        <h2>Edit Ticket</h2>

        <form action="index.php?action=update" method="POST">

            <input type="hidden" name="id" value="<?= $ticket['id']; ?>">

            <label>Full Name</label>
            <input type="text" name="full_name"
                value="<?= htmlspecialchars($ticket['full_name']); ?>" required>

            <label>Email</label>
            <input type="email" name="email"
                value="<?= htmlspecialchars($ticket['email']); ?>" required>

            <label>Phone</label>
            <input type="text" name="phone"
                value="<?= htmlspecialchars($ticket['phone']); ?>" required>

            <br><br>
            <button type="submit">Update Ticket</button>
        </form>
    </div>
</div>

<?php include "partials/footer.php"; ?>