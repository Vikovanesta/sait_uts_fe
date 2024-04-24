<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card">
            <div class="card-body text-center">
                <?php
                $id_mhs = $_GET['nim'];
                $kode_mk = $_GET['kode_mk'];

                $url = 'http://localhost/sait_uts_api/perkuliahan.php?nim='.$id_mhs.'&kode_mk='.$kode_mk;

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $result = curl_exec($ch);
                $result = json_decode($result, true);

                curl_close($ch);

                echo '<p>Message: <span class="text-success">' . $result["message"] . '</span></p>';
                    echo '<p>Nilai Berhasil Dihapus!</p>';
                    echo '<a href="listNilai.php" class="btn btn-primary">OK</a>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>
