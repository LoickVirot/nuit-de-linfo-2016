<?php if (isset($data['error'])): ?>
<div class="alert alert-danger">
  <?= $data['error'] ?>
</div>
<?php endif; ?>
<form class="" action="/auth/register" method="post">
  <input type="text" name="username" placeholder="Username" required>
  <input type="text" name="surname" placeholder="Surname">
  <input type="text" name="firstname" placeholder="Firstname">
  <input type="password" name="password" placeholder="Password" required>
  <input type="email" name="email" placeholder="E-mail" required>
  <textarea name="biography" rows="8" cols="40">Biography</textarea>
  <input type="submit" name="name" value="Register">
</form>
