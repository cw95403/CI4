<?= $this->extend("layouts/default") ?>

<? $this->section("title") ?>TaskApp-Login<? $this->endSection() ?>

<? $this->section("content") ?>
   <h1>Login</h1>

   <?php if(session()->has('errors')): ?>
      <ul>
         <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
         <?php endforeach; ?>
      </ul>
   <?php endif; ?>

   <a href="<?= site_url("/") ?>">&laquo; back to index</a>
   
   <?= form_open("/login/create") ?>
      <div>
         <label for="email">Email</label>
         <input type="text" name="email" id="email" value="<?= old('email')?>">
      </div>

      <div>
         <label for="password">Password</label>
         <input type="password" name="password">
      </div>

      <button>Login</button>
      <a href="<?= site_url("/") ?>">Cancel</a>
   </form>



<? $this->endSection() ?>