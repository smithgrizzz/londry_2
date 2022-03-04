<?php require 'header.php'; ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title">Hello, <?php echo $_SESSION["username"]; ?>!</h4>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>