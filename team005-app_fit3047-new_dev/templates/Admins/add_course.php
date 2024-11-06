<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 * @var \Cake\Collection\CollectionInterface|string[] $admins
 * @var \Cake\Collection\CollectionInterface|string[] $students
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
        .courses.form.content {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin: 5px;
            padding: 20px;
        }

        /* Style for the fieldset */
        .courses.form.content fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        /* Style for the legend */
        .courses.form.content legend {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Style for the form controls */
        .courses.form.content .input {
            margin-bottom: 10px;
        }

        /* Style for the input labels */
        .courses.form.content label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for the input fields */
        .courses.form.content input[type="text"],
        .courses.form.content textarea {
            width: 100%;
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        /* Style for the file input field */
        .courses.form.content input[type="file"] {
            margin-top: 5px;
            margin-bottom: 10px;
        }

        /* Style for the back button */
        .side-nav a {
            display: block;
            font-size: 1rem;
            margin-bottom: 20px;
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
            <a href="#" onclick="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses form content">
            <?= $this->Form->create($course, ['class' => 'form-group', 'style' => 'margin-left: 25%; margin-right: 25%;', 'type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Course') ?></legend>
                <div class="form-group">
                    <?= $this->Form->control('title', ['class' => 'form-control-file', 'id' => 'courseImage']); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('description', ['class' => 'form-control-file', 'id' => 'description']); ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->label('courseImage', __('Course Image'), ['class' => 'control-label']); ?>
                    <?= $this->Form->file('courseImage', ['class' => 'form-control-file', 'id' => 'courseImage', 'type' => 'file']); ?>
                    <p><b>If no image is provided, the default image course image below will be used</b></p>
                    <?= $this->Html->image('/img/course_images/default_image/img.jpg', ['width' => '60%', 'height' => '60%'])?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
