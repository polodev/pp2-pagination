<?php require 'partials/header.php'; ?>
<div class="container mt-4">
  <div class="p-5">
    <h2>Available Cities</h2>
  </div>
  <div class="cities">
    <ol>
      <?php foreach($cities as $city): ?>
        <li>
          <a href="city.php?id=<?= $city->id; ?>" class="btn btn-link"><?= $city->name; ?></a>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
  <div class="card">
    <div class="card-header">
      <h2>create a city</h2>
    </div>
    <div class="card-body mb-5">
      <form action="" method="post">
        <div class="form-group">
            <label for="city">Name of City</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="country">Name of Country</label>
            <input type="text" name="country" id="country" class="form-control">
        </div>
        
        <div class="form-group">
          <input type="submit" class="btn btn-info">
        </div>
        
      </form>
    </div>
  </div>

</div>
<?php require 'partials/footer.php'; ?>
