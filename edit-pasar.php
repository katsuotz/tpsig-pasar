<?php include("config.php");

if ( !isset($_GET['id'])){
    header('Location: list-pasar.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pasar WHERE id=$id";
$query = mysqli_query($db, $sql);
$pasar = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasar</title>
</head>
<body>
    <Header>
        <h3>Edit Data Pasar</h3>
    </Header>

    <form action="proses-edit-pasar.php" method="POST">
    <fieldset>
            <input type="hidden" name="id" value="<?php echo $pasar['id'] ?>" /> 
            <p>
                <label for="nama_pasar">Nama Pasar: </label>
                <input type="text" name="nama_pasar" placeholder="Nama Pasar" value="<?php echo $pasar['nama_pasar'] ?>" />
            </p>
            <p>
                <label for="latitude">Latitude: </label>
                <input type="text" name="latitude" value="<?php echo $pasar['latitude'] ?>"/>
            </p>
            <p>
                <label for="longitude">Longitude: </label>
                <input type="text" name="longitude" value="<?php echo $pasar['longitude'] ?>"/>
            </p>
            <p>
            <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>