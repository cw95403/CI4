<?= $this->extend("layouts/default") ?>

<? $this->section("title") ?>TaskApp-Users<? $this->endSection() ?>

<? $this->section("content") ?>
   <h1>Users</h1>
   
   <a href="<?= site_url("/admin/users/new") ?>">New User</a>

   <?php if ($users): ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                
                <tr>
                    <td><a href="<?= site_url("/admin/users/show/" . $user->id) ?>"><?= esc($user->name) ?></a></td>
                    <td><?= esc($user->email) ?></td>
                    <td><?= $user->created_at ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

      <?= $pager->links() ?>

   <?php else: ?>
      <p>no users...</p>

   <?php endif ?>

<? $this->endSection() ?>