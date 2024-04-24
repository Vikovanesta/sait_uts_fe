<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-4 mb-4">Daftar Nilai</h2>

    <div class="mb-3">
        <a href="insertNilaiView.php" class="btn btn-success">Tambah Nilai</a>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>SKS</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $curl= curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, 'http://localhost/sait_uts_api/perkuliahan.php');
        $res = curl_exec($curl);
        $json = json_decode($res, true);

        for($i=0; $i < count($json['data']); $i++){
            echo '<tr>';
            echo '<td>'.$json['data'][$i]['nim'].'</td>';
            echo '<td>'.$json['data'][$i]['nama'].'</td>';
            echo '<td>'.$json['data'][$i]['alamat'].'</td>';
            echo '<td>'.$json['data'][$i]['tanggal_lahir'].'</td>';
            echo '<td>'.$json['data'][$i]['kode_mk'].'</td>';
            echo '<td>'.$json['data'][$i]['nama_mk'].'</td>';
            echo '<td>'.$json['data'][$i]['sks'].'</td>';
            echo '<td>'.$json['data'][$i]['nilai'].'</td>';
            echo '<td>
                    <a href="updateNilaiView.php?nim='.$json['data'][$i]['nim'].'&kode_mk='.$json['data'][$i]['kode_mk'].'" class="btn btn-warning">Edit</a>
                    <a href="deleteNilai.php?nim='.$json['data'][$i]['nim'].'&kode_mk='.$json['data'][$i]['kode_mk'].'" class="btn btn-danger">Delete</a>
                  </td>';
            echo '</tr>';
        }
        ?>

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
