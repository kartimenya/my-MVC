<?php require_once VIEWS . '/incs/header.php' ?>

<main class="main pt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      <form action="" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Name"
              value="<?= old('name') ?>"
            />
            <?= isset($validation) ? $validation->listErrors('name') : '' ?>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Email"
              value="<?= old('email') ?>"
            />
            <?= isset($validation) ? $validation->listErrors('email') : '' ?>
          </div>
          <div class="mb-3">
            <label for="passwod" class="form-label">Passwod</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              placeholder="password"
              value="<?= old('password') ?>"
            />
            <?= isset($validation) ? $validation->listErrors('password') : '' ?>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require_once  VIEWS . '/incs/footer.php' ?>
