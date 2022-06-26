<?php if(isset($_SESSION['notification']['message'])): ?>
  <div class="container">
    <div class ="alert alert-<?= $_SESSION['notification']['type'] ?> alert-dismissible fade show" role="alert">
      <strong><?= $_SESSION['notification']['message'] ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="Close">&times;</button>
    </div>
  </div>
<?php $_SESSION = ['notification'] ?>
<?php endif ?>