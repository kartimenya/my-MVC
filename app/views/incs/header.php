<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?? 'TITLE' ?></title>
    <link rel="stylesheet" href="/assest/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="/">Navbar</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex align-items-center justify-content-between" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/posts/create">New post</a>
                </li>
              </ul>

              <ul class="d-flex align-items-center list-unstyled m-0 gap-3">
                <?php if (check_auth()): ?>
                  <li><?= $_SESSION['user']['name']; ?></li>
                  <li><a class="nav-link" href="/logout">Logout</a></li>
                <?php else: ?>
                  <li><a class="nav-link" href="register">Register</a></li>
                  <li><a class="nav-link" href="login">Login</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <?= get_alerts() ?>
  </body>
</html>
