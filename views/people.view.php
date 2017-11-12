<?php require 'partials/header.php'; ?>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2><?= $user->name; ?></h2>
      </div>
      <div class="card-body">
        <p>Name: <?= $user->name; ?></p>
        <p>City: <a href="city.php?id=<?= $user->city->id; ?>"> <?= $user->city->name; ?></a></p>
      </div>
    </div>
  </div>
<?php require 'partials/footer.php'; ?>