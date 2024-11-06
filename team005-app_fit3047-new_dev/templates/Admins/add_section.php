<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Section $section
 * @var \Cake\Collection\CollectionInterface|string[] $courses
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
        .sections.form.content {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin: 5px;
            padding: 20px;
        }

        /* Style for the fieldset */
        .sections.form.content fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        /* Style for the legend */
        .sections.form.content legend {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Style for the form controls */
        .sections.form.content .input {
            margin-bottom: 10px;
        }

        /* Style for the input labels */
        .sections.form.content label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style for the input fields */
        .sections.form.content input[type="text"],
        .sections.form.content textarea {
            width: 100%;
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        /* Style for the file input field */
        .sections.form.content input[type="file"] {
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

        button[type="submit"] {
            padding: 10px 20px;
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
        <div class="sections form content">
            <?= $this->Form->create($section, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add Section') ?></legend>
                <?php
                echo $this->Form->hidden('course_id', ['value' => $this->request->getQuery('course_id')]);
                echo $this->Form->control('title');
                echo $this->Form->control('description');
                echo $this->Form->control('video_file', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
