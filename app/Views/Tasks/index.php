<?= $this->extend("layouts/default") ?>

<? $this->section("title") ?>TaskApp-Tasks<? $this->endSection() ?>

<? $this->section("content") ?>
   <h1>Tasks</h1>

   <a href="<?= site_url("/tasks/new/") ?>">Add Task</a>

   <ul>
      <?php foreach($tasks as $task): ?>
         <li>
            <a href="<?= site_url("/tasks/show/" . $task['id']) ?>">
               <?=$task['description'] ?></a>
         </li>
      <?php endforeach; ?>
   </ul>

<? $this->endSection() ?>