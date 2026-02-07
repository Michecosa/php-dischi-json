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

      <div class="text-center mb-5">
        <button type="button" class="btn btn-dark btn-lg shadow-sm" data-bs-toggle="modal" data-bs-target="#addAlbumModal">
          <i class="bi bi-plus-lg"></i> Aggiungi nuovo album
        </button>
      </div>

      <div class="d-flex justify-content-center">
        <div class="row g-4 justify-content-center">
          <?php
          require_once(__DIR__ . '/functions.php');
          generateCard($albums);
          ?>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addAlbumModal" tabindex="-1" aria-labelledby="addAlbumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addAlbumModalLabel text-primary">Nuovo Album</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="server.php" method="post">
            <div class="modal-body">
              <div class="mb-3">
                <label for="titolo" class="form-label fw-bold">Titolo del disco</label>
                <input type="text" name="titolo" id="titolo" class="form-control" placeholder="Esempio: The Dark Side of the Moon" required>
              </div>
              <div class="mb-3">
                <label for="artista" class="form-label fw-bold">Artista</label>
                <input type="text" name="artista" id="artista" class="form-control" placeholder="Esempio: Pink Floyd" required>
              </div>
              <div class="mb-3">
                <label for="url_cover" class="form-label fw-bold">URL Cover</label>
                <input type="url" name="url_cover" id="url_cover" class="form-control" placeholder="https://..." required>
              </div>
              <div class="row">
                <div class="col-6 mb-3">
                  <label for="genere" class="form-label fw-bold">Genere</label>
                  <input type="text" name="genere" id="genere" class="form-control" placeholder="Rock..." required>
                </div>
                <div class="col-6 mb-3">
                  <label for="anno_pubblicazione" class="form-label fw-bold">Anno</label>
                  <input type="number" name="anno_pubblicazione" id="anno_pubblicazione" class="form-control" min="1860" max="<?php echo date('Y') ?>" value="<?php echo date('Y') ?>" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <button type="submit" class="btn btn-primary">Salva Album</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>