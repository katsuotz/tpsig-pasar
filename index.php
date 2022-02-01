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

<div>
    <div id="map"></div>

    <br>
    <a href="add-pasar.php">Tambah Pasar</a>
    <br>
    <table border="1">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasar</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM pasar";
        $query = mysqli_query($db, $sql);
        while ($pasar = mysqli_fetch_array($query)) {?>
            <tr>
            <td><?= $pasar['id'] ?></td>
            <td><?= $pasar['nama_pasar'] ?></td>
            <td><?= $pasar['latitude'] ?></td>
            <td><?= $pasar['longitude'] ?></td>
            <td>
            <a href="edit-pasar.php?id=<?= $pasar['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $pasar['id'] ?>">Delete</a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</div>

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
      'center': [-6.903363, 107.6081381],
      'zoom': 12,
      'layers': [
        base.OpenStreetMap
      ]
    });


      <?php
      $sql = "SELECT * FROM pasar";
      $query = mysqli_query($db, $sql);
      while ($pasar = mysqli_fetch_array($query)) {?>
        L.marker([<?= $pasar['latitude'] ?>, <?= $pasar['longitude'] ?>], {
          title: "<?= $pasar['nama_pasar'] ?>"
        }).addTo(map).on('click', function (e) {
          alert(e.target.options.title)
          // console.log(e, e.target.options)
        })
    <?php } ?>
  });
</script>
</body>
</html>