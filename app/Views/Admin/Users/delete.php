<?= $this->extend("layouts/default") ?>

<? $this->section("title") ?>TaskApp-Users<? $this->endSection() ?>

<? $this->section("content") ?>
   <h1>Delete User</h1>

   <p>Are you sure?</p>

   <?php if(session()->has('errors')): ?>
      <ul>
         <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
         <?php endforeach; ?>
      </ul>
   <?php endif; ?>

   <a href="<?= site_url("/admin/users") ?>">&laquo; back to index</a>
   
   <?= form_open("/admin/users/delete/".$user->id) ?>

      <button>Yes</button>
      <a href="<?= site_url("/admin/users/show/".$user->id) ?>">Cancel</a>
   </form>

<? $this->endSection() ?>