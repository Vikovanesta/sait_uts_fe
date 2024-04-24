<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
    $nim = $_GET['nim'];
    $kode_mk = $_GET['kode_mk'];
    $url = 'http://localhost/sait_uts_api/perkuliahan.php?nim='.$nim.'&kode_mk='.$kode_mk.'';
    $curl= curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    $res = curl_exec($curl);
    $json = json_decode($res, true);
?>

<div class="container">
    <h2 class="mt-4 mb-4">Edit Nilai</h2>

    <form action="updateNilai.php" method="post">
        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
        <input type="hidden" name="kode_mk" value="<?php echo $kode_mk; ?>">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $json['data'][0]['nama']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="Nama MK">Nama MK:</label>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="<?php echo $json['data'][0]['nama_mk']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="text" class="form-control" id="nilai" name="nilai" value="<?php echo $json['data'][0]['nilai']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Nilai</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
    