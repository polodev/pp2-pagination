<?php require 'partials/header.php'; ?>
<div class="container mt-5">
  <div class="card mb-5">
    <div class="card-header"><h2>All people</h2></div>
    <div class="card-body">
      <div>
        <form method="get" >
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="search" id="search" class="form-control" placeholder="Search here ..."> 
              <button type="submit" class="btn btn-info input-group-addon">Search</button>
            </div>
          </div>
        </form>
      </div>
      <?php foreach($people as $person): ?>
        <a href="people.php?id=<?= $person->id ?>" class='btn btn-link'>
          <?= $person->name; ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h2>Create a person</h2>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control" required="">
              <?php foreach($cities as $city): ?>
                <option value="<?= $city->id ?>"><?= $city->name; ?></option>
              <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <button class="btn btn-info" type="submit">Add person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
