<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>pasakumi</h1>

<ul>
<?php
  foreach($pasakumi as $pasak) {
  echo "<li>" . $pasak["nosaukums"] . " / " . $pasak["datums"] . " / " . $pasak["norises_vieta"] . "</li>";
  }
  ?>
</ul>
<?php require "components/footer.php" ?>