<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>pasakumi</h1>

<table>
<?php
  foreach($kolektivi as $kolek) {
  echo "<h1>" . $kolek["deju_kolektivi"] . "</h1>" . "<p>" .$kolek["apraksts"] . "</p>";
  }
  ?>
</table>
<?php require "components/footer.php" ?>
