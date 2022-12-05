<?php
include "../koneksi.php";
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$ulangi_password = $_POST['ulangi_password'];

if ($password == $ulangi_password) {
    $sql = "INSERT INTO admin VALUES ('$username', '$password', '$nama')";
    $a = $koneksi->query($sql);
    if ($a == true) {
        echo "
            <script>
                alert('Anda Sukses Registrasi');
                window.location='../login/login_admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Error');
                history.back();
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Ulangi, Password Anda tidak sama');
            history.back();
        </script>
    ";
}