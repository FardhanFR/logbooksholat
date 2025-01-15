<?php

include "header.php";

?>



<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop" style="background-color: blue">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">

                    <form class="form-header" action="prospenkar.php" method="POST">
                        <input class="au-input au-input--xl" autocomplete="off" type="text" name="cari"
                            placeholder="Cari Nama" />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <h1 style="font-family: Arial; color: white">Data Sholat</h1>
                    <div class="header-button">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="table-responsive table--no-card m-b-30">


                    </div>
                </div>
                <?php
                include 'koneksi.php';
                $query1 = "SELECT * FROM tb_sholat ORDER BY id";

                $pola = 'desc';
                $polabaru = 'desc';

                if (isset($_GET['orderby'])) {
                    $orderby = $_GET['orderby'];
                    $pola = $_GET['pola'];

                    $query1 = "SELECT * FROM tb_sholat ORDER BY $orderby $pola";
                    mysqli_query($koneksi, $query1);
                    if ($pola == 'desc') {
                        $polabaru = 'desc';
                    } else {
                        $polabaru = 'desc';
                    }

                }
                ?>
                <div class="row">

                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>

                                    <th style="background-color: blue">
                                        <center>NIK</center>
                                    </th>
                                    <th style="background-color: blue">
                                        <center>Nama</center>
                                    </th>
                                    <th style="background-color: blue">
                                        <center>Divisi</center>
                                    </th>
                                    <th style="background-color: blue">
                                        <center>Sholat</center>
                                    </th>
                                    <th style="background-color: blue">
                                        <center>Foto</center>
                                    </th>
                                    <th style="background-color: blue">
                                        <center>Aksi</center>
                                    </th>

                                </tr>
                            </thead>
                            <?php


                            $no = 1;



                            ?>
                            <tbody>

                                <?php
                                $no++;
                                include 'paging.php';

                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman > 1) {
                            echo "href='?halaman=$Previous'";
                        } ?>>Previous</a>
                    </li>
                    <?php
                    for ($x = 1; $x <= $total_halaman; $x++) {
                        ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman < $total_halaman) {
                            echo "href='?halaman=$next'";
                        } ?>>Next</a>
                    </li>
                </ul>

                <!-- Modal -->

                <!-- End Modal -->
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">

                    </div>
                </div>
                <!--modal -->


                <!-- END MODAL-->


            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->