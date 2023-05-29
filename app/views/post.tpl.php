<?php require_once VIEWS . '/incs/header.php' ?>

<main class="main pt-3">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <?= h($post['title']) ?>
        <?= h($post['content']) ?>
      </div>
      <?php require_once  VIEWS . '/incs/sidebar.php' ?>
    </div>
  </div>
</main>

<?php require_once  VIEWS . '/incs/footer.php' ?>
