<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;


$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8001',
    'timeout' => 5
]);

$response = $client->request('GET', '/api/handphone/'.$id);
$body = $response->getBody();
$data_body = json_decode($body);

?>
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
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>Edit Data <b>Handphone</b></h2>
                            </div>
                        </div>
                    </div>
                    <form action="edit_data_handphone.php?id=<?php echo $id?>" method="POST">
                    <div class="mb-3">
                            <label for="name_field" class="form-label">Jenis Handphone</label>
                            <input type="text" class="form-control" id="jenishp" name="jenishp" value="<?php echo $data_body->jenishandphone?>"required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahKT" class="form-label">Spesifikasi</label>
                            <input type="text" name="spesifikasi" id="spesifikasi" class="form-control" value="<?php echo $data_body->spesifikasi?>" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahKM" class="form-label">Status Barang</label>
                            <input type="text" name="status" id="status" class="form-control" value="<?php echo $data_body->status?>" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $data_body->harga ?>" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>