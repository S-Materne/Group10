<?php include "partials/header.php"; ?>
<?php include "partials/nav.php"; ?>

<div class="container">
    <div class="card">
        <h2>Dashboard</h2>

        <p><strong>Total Registered:</strong> <?= $stats[0]; ?></p>
        <p><strong>Total Checked In:</strong> <?= $stats[1]; ?></p>

        <a href="index.php?action=list">
            <button>View All Tickets</button>
        </a>
    </div>
</div>

<?php include "partials/footer.php"; ?>