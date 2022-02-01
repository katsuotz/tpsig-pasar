<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar Bandung</title>
</head>
<body>
    <header>
        <h3>List Pasar di Bandung</h3>
    </header>
    
    <nav>
        <a href="add-pasar.php">Tambah Pasar</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasar</th>
                <th>latitude</th>
                <th>longitude</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pasar";
            $query = mysqli_query($db, $sql);

            while($pasar = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$pasar['id']."</td>";
                echo "<td>".$pasar['nama_pasar']."</td>";
                echo "<td>".$pasar['latitude']."</td>";
                echo "<td>".$pasar['longitude']."</td>";
                echo "<td>";
                echo "<a href='edit-pasar.php?id=".$pasar['id']."'>Edit</a> | ";
                echo "<a href='delete.php?id=".$pasar['id']."'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>