<center><h3>Inscription</h3>
</br></br></br>
<?php if (isset($data['error'])): ?>
<div class="alert alert-danger">
  <?= $data['error'] ?>
</div>
<?php endif; ?>
<form class="" action="/auth/register" method="post">
  <input type="text" name="username" placeholder="Username" required>
  </br></br>
  <input type="text" name="surname" placeholder="Surname">
  </br></br>
  <input type="text" name="firstname" placeholder="Firstname">
  </br></br>
  <input type="password" name="password" placeholder="Password" required>
  </br></br>
  <input type="email" name="email" placeholder="E-mail" required>
  </br></br>
  <textarea name="biography" rows="8" cols="40">Biography</textarea>
  </br></br>
  <input type="submit" name="name" value="Register">
</form>
</center>