<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HumanizeU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="<?= base_url() ?>assets/admin/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/admin/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <?php $this->load->view('pages/admin/header'); ?>
    <!-- ======= Sidebar ======= -->
    <?php $this->load->view('pages/admin/aside'); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">


                                <div class="card-body">
                                    <h5 class="card-title">Number of Zombies registered<span></span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo $total_non_admin_users; ?></h6>
                                            <span class="text-success small pt-1 fw-bold"></span> <span
                                                class="text-muted small pt-2 ps-1">Zombie</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Course <span>| Total</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo $total_cours; ?></h6>
                                            <span class="text-success small pt-1 fw-bold"></span> <span
                                                class="text-muted small pt-2 ps-1">course</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">QCM <span>| Total</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo $total_qcm; ?></h6>
                                            <span class="text-danger small pt-1 fw-bold"></span> <span
                                                class="text-muted small pt-2 ps-1">qcm</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="barChart" style="min-height: 400px;" class="echart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            // Récupérer les données PHP
                                            <?php
                                            $noms_niveaux = [];
                                            $nombre_utilisateurs = [];
                                            foreach ($utilisateurs_par_niveau as $niveau) {
                                                $noms_niveaux[] = $niveau['nom_niveau'];
                                                $nombre_utilisateurs[] = $niveau['nombre_utilisateurs'];
                                            }
                                            ?>

                                            // Utiliser les données avec ECharts
                                            var chart = echarts.init(document.querySelector("#barChart"));
                                            chart.setOption({
                                                xAxis: {
                                                    type: 'category',
                                                    data: <?php echo json_encode($noms_niveaux); ?> // Utiliser les noms des niveaux récupérés
                                                },
                                                yAxis: {
                                                    type: 'value'
                                                },
                                                series: [{
                                                    data: <?php echo json_encode($nombre_utilisateurs); ?>, // Utiliser le nombre d'utilisateurs récupéré
                                                    type: 'bar'
                                                }]
                                            });
                                        });
                                    </script>

                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('pages/admin/footer'); ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/admin/assets/js/main.js"></script>

</body>

</html>