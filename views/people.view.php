<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $user->name; ?> | People site</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body class="bg-success">
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2><?= $user->name; ?></h2>
      </div>
      <div class="card-body">
        <p>Name: <?= $user->name; ?></p>
        <p>City: <?= $user->city->name; ?></p>
      </div>
    </div>
  </div>
</body>
</html>