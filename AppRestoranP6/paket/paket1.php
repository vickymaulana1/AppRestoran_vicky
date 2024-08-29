<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <img src="../gambar/Breakfast.jpg" alt="">
            </div>
            <div class="col">
                <?php
                $menupaket =
                    [
                        [
                            'nama_paket' => 'paket 1',
                            'makanan' => 'nasi biasa, ayam ,telur',
                            'minuman' => 'air putih',
                            'harga_paket' => 15000
                        ],
                    ];
                ?>

                <table class="table">
                    <thead>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($menupaket as $paket) {
                        ?>
                            <tr class="align-middle">
                            <tr>
                                <td><?= $paket['nama_paket'] ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Makanan</td>
                                <td>:</td>
                                <td><?= $paket['makanan'] ?></td>
                            </tr>
                            <tr>
                                <td>Minuman</td>
                                <td>:</td>
                                <td><?= $paket['minuman'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td> Rp. <?= $paket['harga_paket'] ?></td>
                            </tr>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <input type="text" placeholder="Masukan Nama" require>
                                <input type="text" placeholder="Berapa Pesanan">
                                <button class="btn btn-success">Pesan</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="../Halamanmenu.php" class="btn btn-success">Kembali</a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Pesan
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Menu Paket 2</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="hasil.php">
                                    <input type="hidden" name="harga" value="<?= $paket['harga_paket'] ?>">
                                    <div>
                                        <input type="hidden" name="namapaket" value="Paket 1, <?= $paket['makanan'] ?> + <?= $paket['minuman'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="pesanan" class="form-control" placeholder="Berapa Pesanan" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Pesan</button>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>