<?php include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama_pasar = $_POST['nama_pasar'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $sql = "UPDATE pasar SET nama_pasar='$nama_pasar', latitude='$latitude', longitude='$longitude' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        die('Tidak bisa di simpan');
    }
} else {
    die("Tidak bisa di akses");
}

?>