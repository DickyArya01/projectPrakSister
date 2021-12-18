<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <!-- datatable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <!-- end datatable -->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
                $('#tabel-undangan').DataTable();
            });
        </script>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-xl">
    <a class="navbar-brand fw-bold" href="index.php">ServU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Data Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="handphone.php">Data Handphone</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <h3 class="my-3">Tambah Data Service</h3>
                    <div class="card shadow p-2 mb-5 bg-body rounde">
                        <div class="card-body">
                          <form action="add_data_service.php" method="POST" enctype="multipart/form-data">
                              <div class="mb-3">
                                  <label for="nama" class="form-label">Jenis Handphone</label>
                                  <input type="text" class="form-control" id="jenishp" name="jenishp" required>
                              </div>
                              <div class="mb-3">
                                  <label for="alamat" class="form-label">Keluhan</label>
                                  <input type="text" name="keluhan" id="keluhan" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                  <label for="notelp" class="form-label">Pemilik</label>
                                  <input type="text" name="pemilik" id="pemilik" class="form-control" required>
                              </div>
                              <div class="mb-3">
                                  <label for="notelp" class="form-label">No. Telepon</label>
                                  <input type="text" name="notelp" id="notelp" class="form-control" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>