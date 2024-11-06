<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Section $section
 */

//$this->Html->css("/webroot/css/sections_view.css")

?>

<head>
    <style>
        th {
            background-color: #a1eae7;
            font-weight: bold;
            padding: 10px;
            text-align: left;
        }

        .row {
            display: flex;
            flex-direction: column;
        }

        h3 {
            margin-top: 20px
        }

        .column-responsive {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 0;
        }

        .content {
            margin-left: 0;
        }

        table {
            width: 80%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        table .narrow1 {
            width: 20%;
        }
    </style>
</head>

<div class="row">

    <a href="#" onclick="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>

    <div class="column-responsive column-80">
        <div class="sections view content">
            <h3><?= h($section->title) ?></h3>
            <table>
                <tr>
                    <th class="narrow1"><?= __('Course') ?></th>
                    <td><?= $section->has('course') ? $this->Html->link($section->course->title, ['controller' => 'Courses', 'action' => 'view', $section->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th class="narrow1"><?= __('Description') ?></th>
                    <td><?= h($section->description) ?></td>
                </tr>
            </table>

            <video width="470" height="350" controls>
                <source src="<?= $this->Url->build('/videos/' . $section->video) ?>" type="video/mp4">
            </video>
        </div>
    </div>
</div>
