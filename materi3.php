<?php
function hello ()
{
    echo "Selamat Datang di Rumah Hantuu";
}
hello();

function tambah($a, $b){
    $hasil = $a + $b;
    return $hasil; 

}
function kali($a, $b){
    $hasil = $a * $b;
    return $hasil; 

}
function bagi($a, $b){
    $hasil = $a / $b;
    return $hasil; 

}
function kurang($a, $b){
    $hasil = $a - $b;
    return $hasil; 

}
echo "<br>================<br>";

echo tambah(1,2);

function login(string $username, string $password)
{
    if($username == "admun" && $password == "1234567") {
        return true;
    } else {
        return false;
    }
}
?>

<?php
echo "<br>==================<br>"
?>

<form method="POST">
    Masukkan angka 1: <input type="number" name="angka1">
    Masukkan angka 2: <input type="number" name="angka2">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
    if(isset($_POST["angka1"])){
        $newAngka1 = $_POST['angka1'];
        $newAngka2 = $_POST['angka2'];
        echo "hasil penjumlahan:". tambah($newAngka1,$newAngka2);
        echo "<br><br>";
        echo "hasil perkalian:". kali($newAngka1,$newAngka2);
        echo "<br><br>";
        echo "hasil pembagian:". bagi($newAngka1,$newAngka2);
        echo "<br><br>";
        echo "hasil pengurangan:". kurang($newAngka1,$newAngka2);

    }
?>



<from method="POST">
    <label for"">Username:</label>
    <input type="text" name="username"><br><br>
    <label for"">Password:</label>
    <input type="password" name="password"><br><br>
    <input type="button="kirim" value="kirim">
</from>
 
<?php
if (isset($_POST["username"])){
    $Username = $_POST["username"];
    $Password = $_POST["password"];
    if (login($Username, $Password)) {
        echo "Login Berhasil";
    } else {
        echo "Login Bagal";

    }
}

