<?= $this->extend("layouts/default") ?>

<? $this->section("title") ?>TaskApp-Tasks<? $this->endSection() ?>

<? $this->section("content") ?>
   <h1>Delete Task</h1>

   <p>Are you sure?</p>

   <?php if(session()->has('errors')): ?>
      <ul>
         <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
         <?php endforeach; ?>
      </ul>
   <?php endif; ?>

   <a href="<?= site_url("/tasks") ?>">&laquo; back to index</a>
   
   <?= form_open("/tasks/delete/".$task->id) ?>

      <button>Yes</button>
      <a href="<?= site_url("/tasks/show/".$task->id) ?>">Cancel</a>
   </form>

<? $this->endSection() ?>