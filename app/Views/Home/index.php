<?= $this->extend("layouts/default") ?>



<? $this->section("title") ?>TaskApp-Home<? $this->endSection() ?>
<? $this->section("content") ?>
   <h1>Welcome Home!</h1>

   <a href="<?= site_url("/signup") ?>">Sign Up</a>
   <a href="<?= site_url("/login") ?>">Login</a>

   <?php if(session()->has('user_id')): ?>
      <p>User is logged in</p>
   <?php else: ?>
      <p>User is not logged in</p>
   <?php endif; ?>

<? $this->endSection() ?>