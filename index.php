<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./assets/leaflet/leaflet.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

<div id="map"></div>

<script src="./assets/leaflet/leaflet.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // code...
    var base = {
      'OpenStreetMap': L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        'attribution': 'Map data &copy; OpenStreetMap contributors'
      })
    };

    var map = L.map('map', {
      'center': [-6.903363,107.6081381],
      'zoom': 12,
      'layers': [
        base.OpenStreetMap
      ]
    });

    L.marker([-6.903363,107.6081381], {
      title: 'Kota Bandung'
    }).addTo(map).on('click', function (e) {
      console.log(e, e.target.options)
    })
  });
</script>

<br>
<a href="add-pasar.php">Tambah Pasar</a>
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