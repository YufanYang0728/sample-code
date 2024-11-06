<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
//$this->Html->css('/css/sections_view.css')
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

        .column {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .column-responsive {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 0;
        }

        .side-nav {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .content {
            margin-left: 0;
        }

        table {
            width: 80%;
            margin-bottom: 20px;
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
    <aside class="column">
        <div class="side-nav">
            <a href="#" onclick="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <h3><?= h($course->title) ?></h3>
            <table>
                <tr>
                    <th class="narrow1"><?= __('Description') ?></th>
                    <td><?= h($course->description) ?></td>
                </tr>
                <tr>
                    <th class="narrow1"><?= __('Date') ?></th>
                    <td><?= h($course->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Sections') ?></h4>
                <?php if (!empty($course->sections)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Title') ?></th>
                                <th><?= __('Description') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($course->sections as $sections) : ?>
                                <tr>
                                    <td><?= h($sections->title) ?></td>
                                    <td><?= h($sections->description) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Sections', 'action' => 'view', $sections->id]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
