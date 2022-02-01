<?php include("config.php");

if(isset($_POST['tambah'])){
    $nama_pasar = $_POST['nama_pasar'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $sql = "INSERT INTO pasar (nama_pasar, latitude, longitude) VALUE ('$nama_pasar', '$latitude', '$longitude')";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Tidak bisa di akses");
}

?>