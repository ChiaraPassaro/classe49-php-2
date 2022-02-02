<?php
include __DIR__ . '/../server/db.php';
?>

<div class="cards flex flex-wrap">
  <?php foreach ($cards as $card) { ?>

    <div class="card">
      <div class="card-top">
        <img src="<?= $card['img'] ?>" alt="">
      </div>
      <div class="card-content">
        <h2><?= $card['title'] ?></h2>
        <ul class="menu-inline">
          <?php foreach ($card['tags'] as $tag) { ?>

            <li><a href="<?= $tag['href'] ?>"><?= $tag['text'] ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>

  <?php } ?>
</div>