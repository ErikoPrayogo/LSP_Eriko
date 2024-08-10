<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Data Mahasiswa</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mhs as $key=>$data): ?>
                <tr style="background-color:<?php if($key%2 == 0){ echo "#fff";}else{echo "#f5f6fa";} ?>">
                    <td><?php echo $data["nik"] ?></td>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["tempat_lahir"] ?></td>
                    <td><?php echo $data["tanggal_lahir"] ?></td>
                    <td><?php echo $data["jenis_kelamin"] ?></td>
                    <td><?php echo $data["alamat"] ?></td>
                    <td><?php echo $data["agama"] ?></td>
                    <td><a href="<?php echo base_url('mahasiswa/delete/'.$data['id']) ?>"><input type="button" class="btn btn-danger btn-sm" value="Hapus"></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    
    
    <div class="d-flex justify-content-center mt-4">
        <a href="<?php echo base_url('segitiga');?>" class="mr-2">
            <button type="button" class="btn btn-success">Hitung Luas Segitiga</button>
        </a>
        <a href="<?php echo base_url('mahasiswa/add');?>">
            <button type="button" class="btn btn-primary">Input Biodata</button>
        </a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
