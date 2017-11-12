<?php require 'partials/header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2><?= $city->name; ?> <a href="create-city.php" class="btn btn-link">All city</a></h2>
    </div>
    <div class="card-body">
      <p> City Name: <?= $city->name; ?> </p>
      <p> Country Name: <?= $city->country; ?> </p>
      <?php if (count($city->users)) : ?>
        <h3>People who live in <?= $city->name; ?></h3>
        <ul>
        <?php foreach($city->users as $person): ?>
          <li>
            <a href="people.php?id=<?= $person->id ?>"> <?= $person->name;  ?> </a>
          </li>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
