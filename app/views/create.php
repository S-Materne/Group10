<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>

<div class="container">
    <div class="card">
        <h2>Register Attendee</h2>

        <form action="index.php?action=store" method="POST">

            <label>Full Name</label>
            <input type="text" name="full_name" required>

           <br><br><label>Email</label>
            <input type="email" name="email" required>

            <br><br><label>Phone</label>
            <input type="text" name="phone" required>

            <br><br>
            <button type="submit">Generate Ticket</button>

        </form>
    </div>
</div>

<?php include "partials/footer.php"; ?>