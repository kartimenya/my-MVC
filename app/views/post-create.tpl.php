<?php require_once VIEWS . '/incs/header.php' ?>

<main class="main pt-3">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Post title</label>
            <input type="text" class="form-control" id="title" name="title" />
            <?php if (isset($errors['title'])): ?>
            <div class="invalid-feedback d-block">
              <?= $errors['title'] ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="excert" class="form-label">Excert</label>
            <textarea
              name="excert"
              type="text"
              class="form-control"
              id="excert"
              rows="2"
            ></textarea>
            <?php if (isset($errors['excert'])): ?>
            <div class="invalid-feedback d-block">
              <?= $errors['excert'] ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea
              name="content"
              type="text"
              class="form-control"
              id="content"
              rows="5"
            ></textarea>
            <?php if (isset($errors['content'])): ?>
            <div class="invalid-feedback d-block">
              <?= $errors['content'] ?>
            </div>
            <?php endif; ?>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <?php require_once VIEWS . '/incs/sidebar.php' ?>
    </div>
  </div>
</main>

<?php require_once VIEWS . '/incs/footer.php' ?>
