<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasar</title>
</head>
<body>
    <Header>
        <h3>Tambah Pasar</h3>
    </Header>
    <form action="proses-add-pasar.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_pasar">Nama Pasar: </label>
                <input type="text" name="nama_pasar" placeholder="Nama Pasar" />
            </p>
            <p>
                <label for="latitude">Latitude: </label>
                <input type="text" name="latitude" />
            </p>
            <p>
                <label for="longitude">Longitude: </label>
                <input type="text" name="longitude" />
            </p>
            <p>
            <input type="submit" value="Tambah" name="tambah" />
            </p>
        </fieldset>
    </form>
</body>
</html>