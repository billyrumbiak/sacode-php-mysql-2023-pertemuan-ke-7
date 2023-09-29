<?php
if(isset($_POST))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_wa = $_POST['nomor_wa'];
}elseif(isset($_GET))
{
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $nomor_wa = $_GET['nomor_wa'];
}

?>


<!DOCTYPE html>
<head>
    <title>Method Post</title>
    <!-- Link Integrasi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <!-- HEADER START -->
    <header class="bg-dark text-white">
        <p class="p-3 text-uppercase fw-bolder">Data Siswa</p>
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1>Sudah Terdaftar</h1>
                    <p>Nama <?= $nama ?></p>
                    <p>Emial <?= $email ?></p>
                    <p>Nomor WA <?= $nomor_wa ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT END -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>