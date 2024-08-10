<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
    <!-- Mengimpor Bootstrap CSS untuk styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Mengatur agar div memenuhi tinggi layar */
        }
        .form-container {
            width: 100%;
            max-width: 400px; /* Batas maksimal lebar form */
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container centered-form">
    <div class="form-container">
        <h2 class="text-center mb-4">Luas Segitiga</h2>
        <!-- Form untuk menghitung luas segitiga -->
        <!-- Action mengarah ke method 'hitung' di controller 'segitiga' -->
        <form method="post" action="<?php echo base_url('segitiga/hitung');?>">
            <!-- Input untuk alas segitiga -->
            <div class="form-group">
                <label for="alas">Alas Segitiga</label>
                <input type="number" class="form-control" id="alas" name="alas" placeholder="Masukkan Alas">
            </div>
            <!-- Input untuk tinggi segitiga -->
            <div class="form-group">
                <label for="tinggi">Tinggi Segitiga</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="Masukkan Tinggi">
            </div>
            <?php 
            // Menampilkan hasil perhitungan jika sudah ada
            if(isset($luas_segitiga)){ 
                echo "<h4 class='text-center mt-4'>Luas segitiga adalah: ". $luas_segitiga ."</h4>";
            }
            ?>
            <!-- Tombol submit untuk mengirim form -->
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <!-- Tombol batal yang mengarah ke halaman mahasiswa -->
            <a href="<?php echo base_url('mahasiswa');?>" class="btn btn-danger btn-block mt-2">Batal</a>
        </form>
    </div>
</div>

<!-- Mengimpor JavaScript yang diperlukan untuk Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
