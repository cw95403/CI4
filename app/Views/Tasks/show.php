<?= $this->extend("layouts/default") ?>

<? $this->section("title") ?>TaskApp-Tasks<? $this->endSection() ?>

<? $this->section("content") ?>
   <h1>Task</h1>

   <dl>
      <dt>ID</dt>
      <dd><?= $task['id'] ?></dd>

      <dt>Description</dt>
      <dd><?= $task['description'] ?></dd>

      <dt>Created At</dt>
      <dd><?= $task['created_at'] ?></dd>

      <dt>Updated At</dt>
      <dd><?= $task['updated_at'] ?></dd>
   </dl>



<? $this->endSection() ?>