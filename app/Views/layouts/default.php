<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?= $this->renderSection("title") ?></title>
  </head>
  <body>  

  <a href="<?= site_url("/") ?>">Home</a>

  <?php if(current_user()): ?>

    <p>Hello <?= esc(current_user()->name) ?></p>
    <a href="<?= site_url("/tasks") ?>">Tasks</a>
    <a href="<?= site_url("/logout") ?>">Logout</a>

  <?php else: ?>
    <a href="<?= site_url("/login") ?>">Login</a>
    <a href="<?= site_url("/signup") ?>">Sign Up</a> 

  <?php endif; ?>

  <?php if (session()->has('error')): ?>
    <div class="error">
      <?= session('error') ?>
    </div>
  <?php endif; ?>

  <?php if (session()->has('warning')): ?>
    <div class="warning">
      <?= session('warning') ?>
    </div>
  <?php endif; ?>

  <?php if (session()->has('info')): ?>
    <div class="info">
      <?= session('info') ?>
    </div>
  <?php endif; ?>

  <?= $this->renderSection("content") ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>