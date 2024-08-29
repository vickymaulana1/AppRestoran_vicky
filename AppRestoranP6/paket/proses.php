 <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil nilai formulir
        $name = isset($_POST['nama']) ? trim($_POST['nama']) : '';
        $quantity = isset($_POST['pesanan']) ? intval($_POST['pesanan']) : 0;
        $harga = $_POST['harga'];
        // Validasi input
        if (empty($name) || $quantity <= 0) {
            echo '<div class="alert alert-danger mt-3">Harap masukkan nama dan jumlah yang valid.</div>';
        } else {
            // Hitung total biaya
            $costPerItem = $harga; // Biaya per item
            $totalCost = $quantity * $costPerItem;
        }
    }
    ?>