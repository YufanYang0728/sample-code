<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @property \Authentication\Controller\Component\AuthenticationComponent $Authentication
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])


 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
$this->disableAutoLayout();
echo $this->Html->css('insurance/customer/styles.css');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Advice Cyborg</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!--    <style src="/css/admin/styles.css"></style>-->


</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background-color: rgb(33,37,41); font-family: Montserrat, sans-serif;">

    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/" style="color: #4682b4;">
            <img src="img/ava.png" alt="Logo" class="logo-image" style="max-width: 24px; height: auto;">
            ADVICE CYBORG
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="/" style="color: #4682b4;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => 'Insurance']) ?>" style="color: #4682b4;">Insurance Module Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Admin']) ?>" style="color: #4682b4;">Admin Insurance Page</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Customer']) ?>" style="color: #4682b4;">Customer Insurance Page</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>

    #mainNav {
        z-index: 1000; /* Adjust this value as needed */
    }
    #navbarResponsive {
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Keep navbar links fixed */
    .navbar-nav {
        position: sticky;
        top: 70px; /* Adjust this value to match the padding-top */
    }




</style>


<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Add slideshow container here -->
                <div class="slideshow-container">
                    <?php
                    echo $this->Html->image('insurance/im3.jpg');
                    echo $this->Html->image('insurance/im2.jpg');
                    echo $this->Html->image('insurance/im3.jpg');
                    ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="text-container p-5">
                    <h1 class="text-black font-weight-bold">Insurance</h1>
                    <hr class="divider" style="margin-left: 50px;" />
                    <p class="text-black-75 mb-4 fst-italic">
                        Understanding Policies and Protecting Your Future
                    </p>
                    <a href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Customer']) ?>" class="btn btn-primary btn-xl">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
    <div class="vertical-line"></div>

</header>






<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Advice Cyborg</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<?= $this->Html->script('/js/scripts.js') ?>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->

</body>
</html>



