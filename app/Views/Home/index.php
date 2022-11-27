<?= $this->extend("layouts/default") ?>



<? $this->section("title") ?>TaskApp-Home<? $this->endSection() ?>
<? $this->section("content") ?>
   <h1>Welcome Home!</h1>

   <a href="<?= site_url("/signup") ?>">Sign Up</a>   

   <?php if(session()->has('user_id')): ?>

      <p>User is logged in</p>
      <p>Hello <?= esc(current_user()->name) ?></p>

      <a href="<?= site_url("/logout") ?>">Logout</a>

   <?php else: ?>

      <p>User is not logged in</p>
      <a href="<?= site_url("/login") ?>">Login</a>

   <?php endif; ?>

<? $this->endSection() ?>