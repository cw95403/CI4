<?= $this->extend("layouts/default") ?>



<? $this->section("title") ?>TaskApp-Home<? $this->endSection() ?>
<? $this->section("content") ?>
   <h1>Welcome Home!</h1>

   <a href="<?= site_url("/signup") ?>">Sign Up</a>
<? $this->endSection() ?>