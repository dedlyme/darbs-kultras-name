<?php require "components/head.php" ?>

<h1>pasakumi</h1>

<ul>
<?php
  foreach($pasakumi as $pasak) {
  echo "<li>" . $pasak["nosaukums"] . "</li>";
  }
  ?>
</ul>
<?php require "components/footer.php" ?>