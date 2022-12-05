<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Register Pembeli</title>
</head>

<body style="background-color: #344D67;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="register-form">
                    <form action="aksi_register_pasien.php" method="post" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Register Pembeli</h4>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Nama<span class="text-danger">*</span></label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama anda">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Jenis Kelamin<span class="text-danger">*</span></label>
                                <select class="form-select" name="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Alamat<span class="text-danger">*</span></label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>No HP<span class="text-danger">*</span></label>
                                <input type="number_format" name="no_hp" class="form-control" placeholder="Masukan NO HP">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" placeholder="Masukan Email">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Username<span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan password">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>Ulangi Password<span class="text-danger">*</span></label>
                                <input type="password" name="ulangi_password" class="form-control" placeholder="Ulangi Password">
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="submit" value="Register" class="btn btn-primary float-end"></input>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3" style="color:white;"> Sudah punya akun? <a href="../login/login_user.php" style="color:white;"> Login
                            Sekarang!</a></p>
                </div>
            </div>
        </div>
    </div>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>

</html>