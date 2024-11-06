<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$identity = $this->Identity->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= h('Advice Cyborg') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <?= $this->Html->css(['styles']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top" class="bg-primary bg-opacity-25">
    <div class="min-vh-100">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?= $this->Url->build('/') ?>" id="navbar-brand"">
                <?= $this->Html->image('ava.png', ['alt' => 'Advice Cyborg']); ?>
                <?= $this->Html->tableRow('Advice Cyborg'); ?>
                </a>
            </div>
        </nav>
        <div class="my-4">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer py-4 bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 text-lg-start">Copyright &copy;  Advice Cyborg 2023</div>
                <div class="col-sm-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.apartnerinplanning.com.au/"><i class="fas fa-globe"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/partnersinplanning/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://au.linkedin.com/company/partners-in-planning-financial-services"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <?= $this->Html->script('scripts.js') ?>
</body>
</html>
