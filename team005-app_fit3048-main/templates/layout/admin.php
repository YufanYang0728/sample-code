<?php $this->extend('/layout/default'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->css(['admin/normalize.min', 'admin/milligram.min', 'admin/cake']) ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
    <a class="red-text" href="<?= $this->Url->build('/') ?>">Advice Cyborg Home</a>
    <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => 'Insurance']) ?>">Insurance Module Home</a> <br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?=
                $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Admin'])
                ?>">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=
                $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Customer'])
                ?>">Customer Page</a>
            </li>
        </ul>    </div>
</nav>


<div class="container mt-4">
    <?= $this->fetch('content') ?>
</div>


</body>
</html>
