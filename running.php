<?php
include "client/Client_pembeli.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Running</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <link rel="stylesheet" href="running.css">

</head>


<body>
    <div class="navbar">
        <div class="dropdown">
            <a href="produk.html"><span>Produk</span></a>
            <div class="dropdown-content">
                <a href="running.html" class="posisidropdown1"><span>Running</span></a>
                <a href="football.html" class="posisidropdown2">Football</a>
            </div>
        </div>
        <a href="index.html"><b> Beranda</b></a>
        <img src="img/logo/logo.png" alt="">
    </div>

    <header>
        <h1>RUNNING</h1>
    </header>

    <section>
        <nav>
            <h1 align="center">PRODUK</h1>
            <ul>
                <li><a href="running.html" class="color"><span>Running</span></a></li><br>
                <li><a href="football.html">Football</a></li>
            </ul>
        </nav>

        <article>
            <table align="">
                <?php
                $no = 1;
                $data_array = $abc->tampil_semua_data();
                foreach ($data_array as $r) {
                ?>
                    <tr>
                        <td class="opacity"><a href="lihatrunning.html"><?= $r->nama; ?><br><?= $r->jenis_kelamin; ?></a></td>
                    </tr>

                    <!-- <tr align="center">
                    <td class="opacity"><a href="lihatrunning.html">Nike Epic React Flyknit<br><img
                                src="img/running/running4-nike epic react flyknit.png"><br>Rp 450.000</a></td>
                    <td class="opacity"><a href="lihatrunning1.html">Nike Air Vapormax <br><img
                                src="img/running/running5-nike air vapormax run utility.png"><br>Rp 100.000</a></td>
                    <td class="opacity"><a href="lihatrunning2.html">Nike Rise React Flyknit<br><img
                                src="img/running/running6-nike rise react flyknit LMTD.png"><br>Rp 999.000</a></td>

                </tr> -->
                <?php
                    $no++;
                }
                unset($data_array, $r, $no);
                ?>
            </table>

        </article>
    </section>

    <footer>
        <p>UAS Praktikum Sistem Terdistribusi</p>
    </footer>

</body>

</html>