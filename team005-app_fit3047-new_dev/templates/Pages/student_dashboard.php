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
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout( );

$temporaryStudentId = '14cc1a70-616e-464a-89f9-9d972e4b8674';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Small Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <?php
    $this->Html->css("/webroot/css/Sdt_dashboard.css")
    ?>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("/css/home_style.css") ?>
    <?= $this->Html->script("/js/home_JS.js")?>




</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark custom-bg-color">
    <div class="container px-5">
        <a class="navbar-brand" href="#!" id="logo">YogaBuddy</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#about">About Us</a></li>
                <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#contact">Contact Us</a></li>-->
                <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Dashboard</a></li>-->
                <li class="nav-item">
                    <?= $this->Html->link(
                        'Dashboard',
                        ['controller' => 'Students', 'action' => 'my_courses', $temporaryStudentId],
                        ['class' => 'nav-link active', 'escape' => false]
                    ); ?>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container px-4 px-lg-5">
    <!-- Heading Row-->


    <div class="slideshow-container">
        <!-- Slides will go here -->
        <img src="<?= $this->Url->image('/img/im11.jpg') ?>" />
        <img src="<?= $this->Url->image('/img/im22.jpg') ?>" />
        <img src="<?= $this->Url->image('/img/im33.jpg') ?>" />

        <!--  <img src="/img/im22.jpg" />
          <img src="/img/im33.jpg" />-->

    </div>
    <div class="col-lg-5 text-end">
        <!--            <h1 class="font-weight-light">Welcome </h1>-->
        <?= $this->Html->link(
            'View Dashboard',
            ['controller' => 'Students', 'action' => 'my_courses', $temporaryStudentId],
            ['escape' => false, 'class' => 'btn btn-lg btn custom-btn-color ']
        ); ?>
        <!--            --><?php //= $this->Html->link(
        //                'Login',
        //                ['controller' => 'Courses', 'action' => 'index'],
        //                ['escape' => false, 'class' => 'btn custom-bg-color btn-sm']
        //            ); ?>
    </div>
</div>

<section id="about" class=">About Us-section">
    <div class="container">


        <h2>ABOUT US</h2>
        <div class="flex-container">
            <img src="<?= $this->Url->image('/img/ph1.jpg')  ?>"width="30%" height="30%">

            <p>Meet Sajal, the owner of Yoga Buddy - an online yoga platform that aims to connect people with their inner peace and well-being. Sajal has been practicing yoga for over a decade, and he's seen the transformation it brings in people's lives firsthand. He believes that yoga isn't just about the physical postures but also about cultivating a mindful and compassionate lifestyle.

                Sajal's aspiration is to make yoga accessible to everyone, regardless of their age, gender, or physical ability. He believes that everyone can benefit from yoga, and his goal is to create a safe and inclusive space for people to practice and grow. Sajal's vision is to create a community where people can connect, support each other, and inspire one another to live their best lives.</p>

        </div>


    </div>
</section>


<!-- Call to Action-->
<div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg navbar-dark custom-btn-color">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#contact">Contact Us</a>-->
                    <!--                    </li>-->
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<!--<script src="scripts.js"></script>-->

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->


<style>
    .slideshow-container {
        width: 100%;
        height: 500px;
        position: relative;
    }

    .slideshow-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 5s ease-in-out;
        object-fit: cover;
    }

    .navbar-nav li a {
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px 15px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .navbar-nav li a:hover {
        background-color: #fff;
        color: #333;
    }



    #logo {
        font-size: 2rem; /* increase font size */
        font-weight: bold; /* make the text bold */
        text-shadow: 1px 1px #ccc; /* add a subtle text shadow */
        letter-spacing: 2px; /* increase letter spacing */
        color: black;
    }

    .navbar-dark {
        background-color:#94EDED ;
    }
    .navbar-nav .nav-link {
        color: black !important;
        background-color: ;
        color: black;
        font-weight: bold;
    }



    .col-lg-5 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }
    .custom-bg-color {
        background-color: transparent;
        color: black;
        font-weight: bold;
    }


    btn {
        font-size: 1.2rem;
        padding: 12px 24px;
        border-radius: 30px;
    }


    .about-section h2 {
        font-size: 36px;
        color: #333;
        margin-bottom: 30px;
    }

    .about-section p {
        font-size: 18px;
        color: #666;
        margin-bottom: 30px;
    }

    .contact-section p {
        font-size: 18px;
        color: #666;
        margin-bottom: 30px;
    }


    .about-section .btn {
        font-size: 24px;
        padding: 15px 50px;
        border-radius: 50px;
    }

    .flex-container {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .flex-container img {
        margin-right: 20px;
        max-width: 100%;
        height: auto;
    }
    #about {
        padding-top: 100px;
    }
    #about h2 {
        text-align: center;
    }


    body {
        background-color: linen; /* Set the background color to white */
    }

    .custom-btn-color {
        background-color: rosybrown;
    }







</style>


<!-- Your custom JS -->


</body>
</html>


