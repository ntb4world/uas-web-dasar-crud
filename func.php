<?php
$host       = 'localhost';
$user       = 'root';
$pass       = '';
$nama_db    = 'db_fadlan';

$conn = mysqli_connect($host, $user, $pass, $nama_db);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahdata($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nohp = htmlspecialchars($data["nohp"]);

    $query = "INSERT INTO users VALUES ('', '$nama', '$alamat', '$nohp')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function editdata($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nohp = htmlspecialchars($data["nohp"]);

    // proses update query
    $query =    "UPDATE users SET nama='$nama', 
                alamat='$alamat', nohp='$nohp' 
                WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>