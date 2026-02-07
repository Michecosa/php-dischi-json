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
      <h5>Aggiungi il tuo album!</h5>
  
      <form action="server.php" method="post" class="d-flex flex-column">
        <label for="titolo">Titolo del disco</label>
        <input type="text" name="titolo" id="titolo" placeholder="Titolo">
        <label for="url_cover">URL Cover</label>
        <input type="text" name="url_cover" id="url_cover" placeholder="url_cover">
        <label for="artista">Artista</label>
        <input type="text" name="artista" id="artista" placeholder="Artista">
        <label for="genere">Genere</label>
        <input type="text" name="genere" id="genere" placeholder="Genere">
        <label for="anno_pubblicazione">Anno di Pubblicazione</label>
        <input type="number" name="anno_pubblicazione" id="anno_pubblicazione" placeholder="Anno" min="1860" max="<?php echo date('Y') ?>">
        <button type="submit">Conferma</button>
      </form>

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