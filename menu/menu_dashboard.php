<?php
include "../client/Client_pemasok.php";
include "../client/Client_sepatu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css buatan sendiri -->
    <link rel="stylesheet" href="../css/style_dashboard.css">

    <title>Dashboard Admin</title>
</head>
<!-- banyak data sepatu -->
<?php
$nobanyakdatasepatu = 0;
$data_array = $abc->tampil_semua_data_sepatu();
foreach ($data_array as $r) {
?>


<?php
    $nobanyakdatasepatu++;
}
unset($data_array, $r);
?>

<?php
$nobanyakdatapemasok = 0;
$data_array = $abcd->tampil_semua_data_pemasok();
foreach ($data_array as $r) {
?>


<?php
    $nobanyakdatapemasok++;
}
unset($data_array, $r);
?>



<body>

    <nav class="navbar navbar-info bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:azure;"> Admin Toko Sepatu</a>
        </div>
    </nav>

    <div class="d-flex bg-info text-white" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a style="color:azure;" href="menu_dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-home me-2"></i>Dashboard</a>
                <a href="menu_sepatu.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-database me-2"></i>Sepatu</a>
                <a href="menu_pemasok.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-database me-2"></i>Pemasok</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>
            <div class="row" style="padding-left: 25px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="../img/running/shoesinfo.png" class="card-img-top" alt="... "
                                        style="background-color: darkslategray;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Total Sepatu</h5>
                                        <h2 class=" card-text" style="color: black;">
                                            <?= $nobanyakdatasepatu ?></h2>
                                        <a href="../menu/menu_sepatu.php" class="btn btn-primary">Go Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 280px;">
                                    <img src="../img/profile.png" class="card-img-top" alt="... "
                                        style=" height: 240px; background-color: darkslategrey;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Total Pemasok</h5>
                                        <h2 class=" card-text" style="color: black;">
                                            <?= $nobanyakdatapemasok ?></h2>
                                        <a href="../menu/menu_pemasok.php" class="btn btn-primary">Go Visit</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="padding-left: 12px;">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                        <div class="card mb-3" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../img/tentang/phil knight.jpeg" alt="..."
                                        style="padding-left: 180px; padding-top: 40px;">
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Sejarah</h5>
                                        <p class="card-text" style="color: black; text-align: justify;">Nike didirikan
                                            oleh Phil Knight ,
                                            seorang pelari jarak
                                            menengah dan mahasiswa akutansi di Universitas Oregon, bersama pelatih Bill
                                            Bowerman Phil. Cinta mereka pada olahraga membuat mereka selalu bersama, dan
                                            mereka juga memiliki cinta kepada teknologi sepatu olahraga dan pakaian.
                                            Pada tahun 1962 Knight berhasil menyelesaikan studi, dan melanjutkan untuk
                                            berkeliling dunia. Ketika di Jepang, Knight mulai mengimpor sepatu lari
                                            Jepang ke Amerika Serikat, hanya dengan investasi $ 500, dia mendapat 200
                                            pasang sepatu untuk dijual di AS

                                            Lalu Phil bekerja untuk Onitsuka Tiger. Ketika bekerja untuk Onitsuka Tiger,
                                            dia berfikir bahwa akan mendapat lebih banyak keuntungan jika ia mulai
                                            memproduksi sepatu sendiri. Pada tahun 1971 seorang karyawan Jeff Johnson
                                            terpikir untuk memberi nama Nike (dewi Yunani setelah kemenangan) untuk
                                            perusahaannya. Phil Knight akhirnya memperoleh nama untuk perusahaan yg saat
                                            ini menjadi persuhaan besar, tetapi ia juga membutuhkan sebuah logo.
                                            Caroline Davidson, yang mengenal Phil ketika ia masih menjadi mahasiswa di
                                            University of Oregon. Dia diminta untuk merancang logo untuk Nike, yang
                                            terkenal di seluruh dunia dengan sebutan “The Swoosh”.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL END -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div id="flotback-chart" class="flot-background"></div>
                            </div>
                        </div>
                        <!-- COL END -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <footer class="bg-info pb-3 pt-4">
        <p class="text-center text-white bg-info">Created with love by Ilham Shodiq</p>
    </footer> -->

    <footer class="bg-dark text-center text-white p-4">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="mailto:ilhambheh@gmail.com">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-envelope fa-stack-1x fa-inverse"> </i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/The12sMB">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/ilham_shodq/">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/ilhamshodiq">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="small text-center">Created by Toko Sepatu</div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>
</body>

</html>