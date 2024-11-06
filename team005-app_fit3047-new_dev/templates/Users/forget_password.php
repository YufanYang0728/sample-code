<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$appLocale = Configure::read('App.defaultLocale');

$this->setLayout('login');
$this->assign('title', 'YogaBuddy - Forgot Password?');
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="<?= $appLocale ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container.login {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 0 15px;
        }

        .users.form {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .users legend {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 16px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #ff7f50;
            border-color: #ff7f50;
            color: #fff;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #e0663c;
            border-color: #e0663c;
        }

        .button.button-outline {
            color: #ff7f50;
            text-decoration: none;
            border: none;
            background-color: transparent;
            font-size: 16px;
        }

        .button.button-outline:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<main class="main">
    <div class="container login">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <div class="users form content">
                    <?= $this->Form->create() ?>
                    <fieldset>
                        <legend><?= __('Forgot Password?') ?></legend>
                        <?= $this->Flash->render() ?>
                        <p class="text-center mb-4">Enter your email address registered with our system below to reset your password:</p>
                        <?php
                        echo $this->Form->control('email', [
                            'type' => 'email',
                            'required' => true,
                            'autofocus' => true,
                            'label' => false,
                            'class' => 'form-control'
                        ]);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Send verification email'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                    <hr style="margin: 2rem 0 3rem 0">
                    <?= $this->Html->link(__('Back to login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline']) ?>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
