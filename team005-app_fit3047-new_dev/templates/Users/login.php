<?php

$this->assign('title', __('Log in'));
$this->disableAutoLayout();
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>YogaBuddy - Log in</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("/css/home_style.css") ?>
    <?= $this->Html->css("/css/forms.css") ?>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark custom-bg-color">
        <div class="container px-5">
            <img src="<?php echo $this->Url->image('/img/logo/yogabuddy_logo.jpg'); ?>" alt="Logo">
            <a class="navbar-brand" href="/" id="logo">YogaBuddy</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"> <?= $this->Html->link('Log in', ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link active']) ?>        </li>
                    <!--                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/about">About Us</a></li>-->
                    <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#contact">Contact Us</a></li>-->
                    <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Dashboard</a></li>-->
                    <li class="nav-item"> <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register'], ['class' => 'nav-link']) ?>        </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="users form">
        <?= $this->Flash->render() ?>
        <h3 style="margin: 20px">Log in</h3>
        <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->control('email', ['required' => true]) ?>
            <?= $this->Form->control('password', ['required' => true]) ?>
        </fieldset>
<!--        --><?php //= $this->Form->submit(__('Login')); ?>

        <div>
            <?= $this->Form->button('Log in', [
                'controller' => 'Users',
                'action' => 'login',
                'class' => 'btn btn-primary',
                'id' => 'submitButton'
            ]); ?>

            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('Forgot password?'), ['controller' => 'Users', 'action' => 'forgetPassword'], ['class' => 'button button-outline']) ?>

            <?= $this->Html->link('Not a member? Sign up', [
                'controller' => 'Users',
                'action' => 'register'
            ], [
                'class' => 'button btn btn-light',
                'id' => 'submitButton',
                'style' => 'margin-top: 30px; color: rosybrown; text-decoration: none;'
            ]) ?>


        </div>

    </div>

    <style>
    .users {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h2 {
    margin-top: 0;
    }

    form {
    width: 50%;
    }

    fieldset {
    border: none;
    margin: 0;
    padding: 0;
    }

    input[type="email"],
    input[type="password"] {
        display: block;
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 16px;
    }


    </style>
</main>
