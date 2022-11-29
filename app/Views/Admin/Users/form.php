<div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= esc(old('name', $user->name))?>">
</div>

<div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="<?= esc(old('email', $user->email))?>">
</div>

<div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="">
    <?php if ($user->id): ?>
        <p>Leave blank to keep existing password</p>
    <?php endif ?>
</div>

<div>
    <label for="password_confirmation">Repeat Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" value="">
</div>