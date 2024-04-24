<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Grade Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card">
            <div class="card-body text-center">
                <?php
                if(isset($_POST['nim'])) {    
                    $nim = $_POST['nim'];
                    $kode_mk = $_POST['kode_mk'];
                    $nilai = $_POST['nilai'];

                    $url = 'http://localhost/sait_uts_api/perkuliahan.php';
                    $ch = curl_init($url);
                    $jsonData = array(
                        'nim' =>  $nim,
                        'kode_mk' =>  $kode_mk,
                        'nilai' =>  $nilai
                    );

                    $jsonDataEncoded = json_encode($jsonData);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

                    $result = curl_exec($ch);
                    $result = json_decode($result, true);

                    curl_close($ch);

                    echo '<p>Message: <span class="text-success">' . $result["message"] . '</span></p>';
                    echo '<p>Nilai Berhasil Ditambahkan!</p>';
                    echo '<a href="listNilai.php" class="btn btn-primary">OK</a>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
