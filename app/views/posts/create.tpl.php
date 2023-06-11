<?php 
require_once VIEWS . '/incs/header.php' 

/**
 * @var core\Validator $validation
 */

?>

<main class="main pt-3">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <form action="/posts" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Post title</label>
            <input
              type="text"
              class="form-control"
              id="title"
              name="title"
              placeholder="Title"
              value="<?= old('title') ?>"
            />
            <?= isset($validation) ? $validation->listErrors('title') : '' ?>
          </div>
          <div class="mb-3">
            <label for="excert" class="form-label">Excert</label>
            <textarea
              name="excert"
              type="text"
              class="form-control"
              id="excert"
              rows="2"
              placeholder="Excert"
            >
<?= old('excert') ?></textarea
            >
            <?= isset($validation) ? $validation->listErrors('excert') : '' ?>
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea
              name="content"
              type="text"
              class="form-control"
              id="content"
              rows="5"
              placeholder="Content"
            >
<?= old('content') ?></textarea
            >
            <?= isset($validation) ? $validation->listErrors('content') : '' ?>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require_once VIEWS . '/incs/footer.php' ?>
