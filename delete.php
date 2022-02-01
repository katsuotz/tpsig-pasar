<?php include("config.php");

if( isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM pasar WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('location: index.php');
    } else {
        die("Tidak bisa dihapus");
    }
} else {
    die("Tidak bisa di hapus");
}