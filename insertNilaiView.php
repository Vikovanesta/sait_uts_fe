<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-4 mb-4">Tambah Nilai Baru</h2>

    <form action="insertNilai.php" method="post">
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="kode_mk">Kode MK:</label>
            <input type="text" class="form-control" id="kode_mk" name="kode_mk" required>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="number" class="form-control" id="nilai" name="nilai" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Nilai</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
    