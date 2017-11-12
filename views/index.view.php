<?php require 'partials/header.php'; ?>
  <div class="container">
        <h2 class="text-center mt-5">List of cities</h2>
        <?php foreach($cities as $city): ?>

          <div class="card mt-4">
            <div class="card-header">
              <h2><?= $city->name ?></h2>
            </div>
            <div class="card-body">
              <p>City Name: <?= $city->name; ?></p>
              <p>Country: <?= $city->country; ?></p>
              <div>
                <h4>People LiveIn:</h4>
                <?php foreach($city->users as $user): ?>
                  <a href="/people.php?id=<?= $user->id ?>">
                    <?= $user->name; ?>
                  </a>,
                <?php endforeach; ?>
               </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
<?php require 'partials/footer.php'; ?>