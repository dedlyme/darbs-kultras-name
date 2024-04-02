<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>pasakumi</h1>
<ul>
<?php foreach($pasakumi as $pasak) { ?>
  <li>
    <?= htmlspecialchars($pasak["deju_kolektivi, apraksts"])?>
    <form class="delete-form" method="POST" action="/delete"><button name="id" value="<?= $pasak["id"] ?>">Delete</button></form>
  </li>
<?php } ?>
</ul>
<?php require "components/footer.php" ?>