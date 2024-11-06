<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ $user
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 */
$this->assign('title', __('Register'));
$this->disableAutoLayout();

//$this->Html->css("/css/home_style.css")

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>YogaBuddy - Registration</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css('/css/home_style.css') ?>
    <?= $this->Html->css('/css/forms.css') ?>
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
                    <li class="nav-item"> <?= $this->Html->link('Log in', ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link']) ?>        </li>
                    <!--                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/about">About Us</a></li>-->
                    <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#contact">Contact Us</a></li>-->
                    <!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Dashboard</a></li>-->
                    <li class="nav-item"> <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register'], ['class' => 'nav-link active']) ?>        </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="row" style="margin: 7vb">
        <div class="column-responsive column-80">
            <?= $this->Form->button('Go Back', [
                'onclick' => 'javascript:history.back()',
                'class' => 'btn btn-primary',
            ]); ?>

            <div class="user form content">
                <h2 style="text-align: center">Registration</h2>

                <?= $this->Form->create($user, ['class' => 'form-group', 'context' => ['validator' => 'default'], 'style' => 'margin-left: 25%; margin-right: 25%;']) ?>
                <fieldset>
                    <div class="form-group">
                        <?= $this->Form->label('first_name', __('First name'), ['class' => 'control-label']); ?>
                        <?= $this->Form->text('first_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('last_name', __('Last name'), ['class' => 'control-label']); ?>
                        <?= $this->Form->text('last_name', ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('date_of_birth', __('DOB'), ['class' => 'control-label']); ?>
                        <?= $this->Form->date('date_of_birth', ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('email', __('Email'), ['class' => 'control-label']); ?>
                        <?= $this->Form->email('email', ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('password', __('Password'), ['class' => 'control-label']); ?>
                        <?= $this->Form->password('password', ['class' => 'form-control']); ?>
                    </div>
                </fieldset>
                <div style="justify-content: center;align-items: center;">
                    <?= $this->Form->button('Register', [
                        'controller' => 'Users',
                        'action' => 'register',
                        'class' => 'btn btn-primary',
                        'id' => 'submitButton',
                    ]); ?>
                </div>


                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</main>

