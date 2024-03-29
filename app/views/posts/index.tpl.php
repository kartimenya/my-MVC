<?php require_once VIEWS . '/incs/header.php' ?>

<main class="main pt-3">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <?php foreach($posts as $post): ?>
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title"><?= h($post['title']) ?></h5>
            <p class="card-text">
              <?= h($post['excert']) ?>
            </p>
            <a href="posts?id=<?= $post['id'] ?>" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <?php endforeach ?>

        <hr>

        <?= $pagination ?>
      </div>
      <?php require_once  VIEWS . '/incs/sidebar.php' ?>
    </div>
  </div>
</main>

<?php require_once  VIEWS . '/incs/footer.php' ?>
