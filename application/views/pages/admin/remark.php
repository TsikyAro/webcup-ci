<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HumanizeU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/admin/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <h1>Zombie Remark</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Zombie</a></li>
                    <li class="breadcrumb-item">Remark</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Message - Remark</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col"></th> -->
                                        <th scope="col">Name</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Content</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($remarks as $remark) { ?>
                                        <tr>
                                            <td><?php echo $remark['nom']; ?></td>
                                            <td><?php echo $remark['email']; ?></td>
                                            <td><?php echo $remark['contenu']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                </div>
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