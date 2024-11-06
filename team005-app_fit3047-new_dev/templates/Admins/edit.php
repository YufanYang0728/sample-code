<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<head>
    <style>
        /* Style for the form wrapper */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto;
            max-width: 800px;
        }

        /* Style for the form content */
        .users.form.content {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin: 5px;
            padding: 20px;
        }

        /* Style for the fieldset */
        .users.form.content fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        /* Style for the legend */
        .users.form.content legend {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Style for the form controls */
        .users.form.content .input {
            margin-bottom: 10px;
        }

        /* Style for the input labels */
        .users.form.content label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for the input fields */
        .users.form.content input[type="text"],
        .users.form.content textarea {
            width: 100%;
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        /* Style for the file input field */
        .users.form.content input[type="file"] {
            margin-top: 5px;
            margin-bottom: 10px;
        }

        /* Style for the back button */
        .side-nav a {
            display: block;
            font-size: 1rem;
            margin-bottom: 20px;
            margin-right: 50px;
            text-decoration: none;
        }

        .side-nav a:hover {
            text-decoration: underline;
        }

        button[type="submit"] {
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        /* Set a hover effect for the form buttons */
        button[type="submit"]:hover {
            background-color: #0062cc;
        }
    </style>
</head>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete user "{0} {1}"?', $user->first_name, $user->last_name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                echo $this->Form->control('first_name');
                echo $this->Form->control('last_name');
                ?>
                <div class="input">
                    <label for="level"><?= __('User Level') ?></label>
                    <?= $this->Form->select('level', ['3' => 'Student', '2' => 'Admin']) ?>
                </div>
                <?php
                //echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
