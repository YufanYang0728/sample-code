<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
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

        h4 {
            padding-top: 12px;
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
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete "{0}"?', $course->title), 'class' => 'side-nav-item']) ?>
            <!--<?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?> -->
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <h3><?= h($course->title) ?></h3>
            <table>
                <!--<tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $course->has('admin') ? $this->Html->link($course->enrolments->user_id, ['controller' => 'Admins', 'action' => 'view', $course->enrolments->user_id]) : '' ?></td>
                </tr> -->
                <tr>
                    <th class="narrow1"><?= __('Description') ?></th>
                    <td><?= h($course->description) ?></td>
                </tr>
                <!--<tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($course->title) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($course->date) ?></td>
                </tr>
            </table>
            <!--<div class="related">
                <h4><?= __('Related Students') ?></h4>
                <?php if (!empty($course->students)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Password') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->students as $students) : ?>
                        <tr>
                            <td><?= h($students->id) ?></td>
                            <td><?= h($students->email) ?></td>
                            <td><?= h($students->first_name) ?></td>
                            <td><?= h($students->last_name) ?></td>
                            <td><?= h($students->password) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div> -->
            <div class="related">
                <h4><?= __('Related Sections') ?></h4>
                <?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add'], ['class' => 'side-nav-item']) ?>
                <?php if (!empty($course->sections)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <!--<th><?= __('Id') ?></th>
                            <th><?= __('Course Id') ?></th>-->
                                <th><?= __('Title') ?></th>
                                <th><?= __('Description') ?></th>
                                <th><?= __('Video') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($course->sections as $sections) : ?>
                                <tr>
                                    <!--<td><?= h($sections->id) ?></td>
                            <td><?= h($sections->course_id) ?></td> -->
                                    <td><?= h($sections->title) ?></td>
                                    <td><?= h($sections->description) ?></td>
                                    <td><?= h($sections->video) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Sections', 'action' => 'view', $sections->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Sections', 'action' => 'edit', $sections->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sections', 'action' => 'delete', $sections->id], ['confirm' => __('Are you sure you want to delete "{0}"?', $sections->title)]) ?>
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
