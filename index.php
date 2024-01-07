<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Data Penulis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">
</head>
<body>
<div class="container">
        <div class="alert alert-info text-center">Data Mahasiswa</div>
        <a href="tambah-data.php"><button type="button" class="btn btn-success btn-sm">Tambah Data</button></a>
        <table class="table table-border">
            
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require('func.php');
                $no = 1;
    
                $query = "SELECT * FROM users";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_object($result)) {
                ?>

                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <td><?php echo $row->nohp; ?></td>
                    <td>
                        <a href="edit-data.php?id=<?php echo $row->id; ?>"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
                        <a onclick="return confirm('Anda Yakin Ingin Menghapus Data?')" href="hapus-data.php?id=<?php echo $row->id; ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tbody>
            
        </table>
    </div>
</body>
</html>