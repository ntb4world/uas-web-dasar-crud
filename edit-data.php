<?php
require 'func.php';

$id = $_GET['id'];
$row = query("SELECT * FROM users WHERE id = $id")[0];

if ( isset($_POST["submit"]) ) {
    if ( editdata($_POST) > 0 ) {
        echo "
            <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Ubah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA
            </div>
            <div class="card-body">
              <form action="" method="POST">

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Nama" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>No. HP</label>
                  <input type="text" name="nohp" value="<?php echo $row['nohp'] ?>" placeholder="No. HP" class="form-control">
                </div>
                
                <button type="submit" name="submit" class="btn btn-success">UPDATE</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>