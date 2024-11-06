<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /* Custom CSS for the sidebar */
        #accordionSidebar {
            background-color: #f4623a !important;
        }

        #accordionSidebar .sidebar-brand-text {
            color: #ffffff;
        }

        #accordionSidebar .nav-link {
            color: #ffffff;
        }

        #accordionSidebar .nav-link:hover {
            color: #ffffff;
        }

        #accordionSidebar .sidebar-heading {
            color: #ffffff;
        }

    </style>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?= $this->Html->meta('icon') ?>
    <title>YogaBuddy - Student Dashboard</title>

    <title><?= $this->fetch('Yogabuddy') ?></title>

    <!-- Custom fonts for this template-->

    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <?= $this->Html->css('sb-admin-2.min.css') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar accordion" id="accordionSidebar" style="background-color: #94EDED">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color: rgba(224, 117, 245, 0.97);" href="<?= $this->Url->build(['controller' => 'Students', 'action' => 'myCourses']) ?>">
            <img src="<?php echo $this->Url->image('/img/logo/yogabuddy_logo.jpg'); ?>" alt="Logo" width="45" height="45" class="d-inline-block align-text-top me-2">
            <div class="sidebar-brand-text mx-1">Yogabuddy <sup></sup></div>
        </a>


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
<!--        <li class="nav-item active">-->
<!--            <a class="nav-link" href="index.html">-->
<!--                <i class="fas fa-fw fa-tachometer-alt"></i>-->
<!--                <span>Dashboard</span></a>-->
<!--        </li>-->
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Courses
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <?= $this->Html->link(
                '<i class="fas fa-folder" style="position: relative; left: 5px">  <b>My Courses</b> </i>',
                ['controller' => 'Students', 'action' => 'myCourses'],
                ['escape' => false, 'class' => 'nav-link']
            ); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(
                '<i class="fas fa-solid fa-plus" style="position: relative; left: 5px">  <b>Available Courses</b> </i>',
                ['controller' => 'Students', 'action' => 'availableCourses'],
                ['escape' => false, 'class' => 'nav-link']
            ); ?>
        </li>
        <li class="nav-item">
        <?=$this->Html->link(
            '<i class="fas fa-folder" style="position: relative; left: 5px">  <b>Profile</b> </i>',
            ['controller'=>'Students','action'=>'profile'],
            ['escape'=>false,'class'=>'nav-link']
        );?>
        </li>

        <li class="nav-item">
            <?= $this->Html->link(
                '<i class="fas fa-folder" style="position: relative; left: 5px">  <b>Log out</b> </i>',
                ['controller' => 'Users', 'action' => 'logout'],
                ['escape' => false, 'class' => 'nav-link']
            ); ?>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Overview
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        </li>
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="--><?php //= $this->Url->build('/pages/profile') ?><!--">-->
<!--                <i class="fas fa-solid fa-user" style="position: relative; left: 5px"></i>-->
<!--                <b>My Profile</b>-->
<!--            </a>-->
<!--        </li>-->

        <?php if($_SESSION['isadmin']):?>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Admins', 'action' => 'adminDashboard'], ['class' => 'nav-link', 'id' => 'admin_button']) ?>">
                    <i class="fas fa-solid fa-right-from-bracket" style="position: relative; left: 5px; width: 15px; height: 15px"></i>
                    <b>Admin Dashboard</b>
                </a>
            </li>
        <?php endif;?>

        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/') ?>">
                <i class="fas fa-solid fa-right-from-bracket" style="position: relative; left: 5px; width: 15px; height: 15px"></i>
                <b>Back to Home</b>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['name']?></span>
                            <img class="img-profile rounded-circle"
                                 src="/img/userimg.png">
                        </a>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Yogabuddy 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<?= $this->fetch('script') ?>

</body>

</html>
