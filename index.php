  <?php
  require_once(__DIR__ . '/server.php');
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX - PHP Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1 class="text-center m-4">Albums</h1>
      <div class="d-flex justify-content-center">
        <div class="row g-4 justify-content-center">
          <?php
          require_once(__DIR__ . '/functions.php');
          generateCard($albums);
          ?>
        </div>
      </div>
    </div>
  </body>

  </html>