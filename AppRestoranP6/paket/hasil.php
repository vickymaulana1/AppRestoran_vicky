 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>

 <body>
     <?php
        $menumakanan = $_POST['namapaket'];
        $hargapkt = $_POST['harga'];
        $psn = $_POST['pesanan'];
        $totalharga = $hargapkt * $psn;
        ?>
     <div class="container text-center">
         <div class="row">
             <div class="col">
                 <h1>AyamJago</h1>
             </div>
         </div>
         <div class="row">
             <div class="col">
                 <table>
                     <tr>
                         <td>Nama</td>
                         <td>: <?= $_POST['nama'] ?></td>
                     </tr>
                     <tr>
                         <td>Waktu transaksi</td>
                         <td>: <?= date('d F Y h:i:s') ?></td>
                     </tr>
                 </table>
             </div>
             <hr>
             <div class="col">
                 <table>
                     <tr>
                         <td>Nama Paket</td>
                         <td>: <?= $menumakanan ?></td>
                     </tr>
                     <tr>
                         <td>Harga Paket</td>
                         <td>: Rp. <?= $hargapkt ?></td>
                     </tr>
                     <tr>
                         <td>Jumlah Harga</td>
                         <td>: Rp. <?= $totalharga ?></td>
                     </tr>
                 </table>
             </div>
         </div>
         <hr>
         <div class="row">
             <div class="col">
                 
             </div>
         </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>

 </html>