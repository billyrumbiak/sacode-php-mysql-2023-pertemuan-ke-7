<!DOCTYPE html>
<head>
    <title>Method get</title>
    <!-- Link Integrasi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <!-- HEADER START -->
    <header class="bg-dark text-white">
        <p class="p-3 text-uppercase fw-bolder">Isi Data Siswa</p>
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <form action="view.php" method="post">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="nomor_wa" class="form-label">Nomor WA</label>
                            <input type="number" name="nomor_wa" class="form-control" id="nomor_wa" required>
                        </div>

                        <button class="btn btn-dark">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENT END -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>