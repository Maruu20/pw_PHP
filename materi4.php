<?php
include 'koneksi.php';
if (isset($_POST['kirim'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pengguna (username, password, nama, email) VALUES ('$username', '$password', '$nama','$email')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }
    
} 
?>

<form method="POST">
    Username : <input type="text" name="username"><br>
    Password : <input type="password" name="password"><br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="email" name="email"><br>
    <input type="submit" value="Kirim Data" name="kirim"><br>
</form>
