<?php

include "header.php";

?>



<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop" style="background-color: blue">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">


                    <h1 style="font-family: Arial; color: white; margin-left: 35%">Form Sholat</h1>
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
                        <form action="dt_karyawan_sv.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <table class="table table-borderless table-striped table-earning">

                                    <tbody>
                                        <input type="hidden" class="form-control" name="id" required>
                                        <tr>
                                            <td>NIK</td>
                                            <td>

                                                <input type="number" class="form-control" maxlength="9" required=""
                                                    name="nik" autocomplete="off" size="25px" maxlength="25px">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>

                                                <input type="text" class="form-control" required="" name="nama"
                                                    autocomplete="off">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Divisi</td>
                                            <td>

                                                <input type="text" class="form-control" required="" name="divisi"
                                                    autocomplete="off">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sholat</td>
                                            <td> <select class="form-control" required="" name="sholat">
                                                    <option>--</option>
                                                    <option>Dhuha</option>
                                                    <option>Dzuhur</option>
                                                    <option>Ashar</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>Foto</td>
                                            <td><input type="file" name="foto" required=""></td>
                                        </tr>

                                        <tr>
                                            <td><button type="submit" name="simpan"
                                                    class="btn btn-primary">Simpan</button></td>
                                            <td><input type="reset" name="" value="Batal" class="btn btn-danger"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>


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