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

$this->disableAutoLayout();

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
    $this->Html->css("/css/Sdt_dashboard.css")
    ?>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("/css/home_style.css") ?>
    <?= $this->Html->css("/css/home_manual_style.css") ?>
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
                <li class="nav-item">  <?=$this->Html->link('Home', ['controller' => 'Pages', 'action' => 'index'], ['class' => 'nav-link', 'id' => 'nav-link']) ?> </li>

                <li class="nav-item"> <?= $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'about'], ['class' => 'nav-link']) ?></li>
                <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#contact">Contact Us</a></li>-->
                <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Dashboard</a></li>-->
                <li class="nav-item"> <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register'], ['class' => 'nav-link']) ?>        </li>

                <!--                <li class="nav-item">-->
                <!--                    --><?php //= $this->Html->link(
                //                        'Dashboard',
                //                        ['controller' => 'Courses', 'action' => 'index'],
                //                        ['class' => 'nav-link active', 'escape' => false]
                //                    ); ?>
                <!--                </li>-->

            </ul>
        </div>
    </div>
</nav>

<div class="container px-4 px-lg-5">
    <!-- Heading Row-->

<section id="about" class=">About Us-section">
    <div class="container">


            <h2 class="shadow-text">ABOUT US</h2>
        <div class="flex-container">
            <img src="<?= $this->Url->image('/img/about_us_pfp/ph1.jpg')  ?>"width="30%" height="30%">

            <p>Meet Sajal, the owner of Yoga Buddy - an online yoga platform that aims to connect people with their inner peace and well-being.
                Sajal has been practicing yoga for over a decade, and he's seen the transformation it brings in people's lives firsthand.
                He believes that yoga isn't just about the physical postures but also about cultivating a mindful and compassionate lifestyle.
                Sajal's aspiration is to make yoga accessible to everyone, regardless of their age, gender, or physical ability.
                He believes that everyone can benefit from yoga, and his goal is to create a safe and inclusive space for people to practice and grow.
                Sajal's vision is to create a community where people can connect, support each other, and inspire one another to live their best lives.</p>
        </div>
    </div>
</section>




<!-- Call to Action-->

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Yogabuddy 2023</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<!--<script src="scripts.js"></script>-->
<script> </script>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->


<!-- Your custom JS -->


</body>
</html
