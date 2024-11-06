<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->setLayout('login');
$this->assign('title', 'YogaBuddy - Reset Password');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>YogaBuddy - Reset Password</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- Core theme CSS -->
    <?= $this->Html->css('/css/home_style.css') ?>
    <?= $this->Html->css('/css/forms.css') ?>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container.login {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .users.form {
            background-color: #fff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .users legend {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Additional styling */
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        .btn-primary {
            background-color: #ff7f50;
            border-color: #ff7f50;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
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
        }

        .button.button-outline:hover {
            text-decoration: underline;
        }

        .description {
            text-align: center;
            font-size: 18px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
<div class="container login">
    <div class="row">
        <div class="col-md-6">
            <div class="users form">
                <h2 class="description">Yoga Buddy - An online yoga platform that aims to connect people with their inner peace and well-being.</h2>
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Reset Your Password') ?></legend>
                    <?= $this->Flash->render() ?>
                    <div class="mb-3">
                        <?= $this->Form->label('New Password') ?>
                        <?= $this->Form->password('password', ['required' => true, 'class' => 'form-control']) ?>
                    </div>
                    <div class="mb-3">
                        <?= $this->Form->label('Repeat New Password') ?>
                        <?= $this->Form->password('password_confirm', ['required' => true, 'class' => 'form-control']) ?>
                    </div>
                </fieldset>
                <?= $this->Form->button(__('Reset Password'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
                <hr class="hr-between-buttons">
                <?= $this->Html->link(__('Back to login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline']) ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>
