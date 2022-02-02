<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include_once  __DIR__ .  '/partials/header.php';
  // include_once  __DIR__ .  '/partials/header.php';
  // require __DIR__ .  '/partials/hed.php';
  ?>

  <main>
    <?php
    // include_once __DIR__ . '/server/data.php';

    ?>
    <div class="container">
      <?php
      foreach ($posts as $post) {  ?>
        <div class="card">
          <img src="<?= $post['img'] ?>" alt="">
          <h2><?= $post['title'] ?></h2>
          <div class="content">
            <?= $post['content'] ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>

  <?php
  include_once __DIR__ . '/partials/footer.php';
  ?>
</body>

</html>