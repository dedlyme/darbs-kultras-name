<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?=htmlspecialchars($event["event"]." || ". $event["datetime"] ." || ". $event["place"]) ?></h1>

<?php require "views/components/footer.php" ?>