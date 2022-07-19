<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= $this->renderSection('title') ?>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>/template/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>/template/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url() ?>/template/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="<?= base_url() ?>/template/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= site_url() ?>">EvOg App</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="<?= site_url('auth/login') ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <?= $this->include('layout/menu') ?>
        <!-- /. NAV SIDE  -->
        <?= $this->renderSection('content') ?>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url() ?>/template/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url() ?>/template/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url() ?>/template/assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?= base_url() ?>/template/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabelEvent').dataTable();
            $('#tabelMahasiswa').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>


</body>

</html>