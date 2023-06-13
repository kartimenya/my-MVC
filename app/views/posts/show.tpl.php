<?php require_once VIEWS . '/incs/header.php' ?>

<main class="main pt-3">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <?= h($post['title']) ?>
        <?= h($post['content']) ?>
        <form action="/posts" method="POST">
          <input type="hidden" name="_method" value="delete" />
          <input type="hidden" name="id" value="<?= $post['id']?>" />
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </div>
      <?php require_once  VIEWS . '/incs/sidebar.php' ?>
    </div>
  </div>
</main>

<?php require_once  VIEWS . '/incs/footer.php' ?>
