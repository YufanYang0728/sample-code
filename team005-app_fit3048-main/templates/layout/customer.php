<?php $this->extend('/layout/default'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>

    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('select').select2();
        })
    </script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav" style="background-color: #212529FF; font-family: Raleway, sans-serif;">

    <div class="container px-4 px-lg-5">
       <!-- <a class="navbar-brand" href="/" style="color: #4682b4;"><img src="img/ava.png" alt="Logo" class="logo-image" style="max-width: 50px; height: auto;">
            ADVICE CYBORG</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=
                    $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Admin'])
                    ?>" style="color: #4682b4;">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=
                    $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Customer'])
                    ?>" style="color: #4682b4;">Customer Page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-4">
    <?= $this->fetch('content') ?>
</div>


</body>
</html>
