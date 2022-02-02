<?php
include_once __DIR__ . '/../server/data.php';
?>

<header>
  <nav>
    <ul>
      <?php foreach ($navbar as $value) : ?>
        <li><a href="<?= $value['href'] ?>"><?= $value['text'] ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>