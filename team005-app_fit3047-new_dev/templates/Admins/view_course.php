<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>

<head>
    <style>
        th {
            background-color: #ffa07a;
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
            <?= $this->Html->link(__('Edit Course'), ['action' => 'editCourse', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'deleteCourse', $course->id], ['confirm' => __('Are you sure you want to delete "{0}"?', $course->title), 'class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <div>
                <?= $this->Html->image(h($course->image), [
                    'style' => 'width: 100%; height: 42vh; object-fit: cover; object-position: center; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);'
                ]) ?>
            </div>
            <h3><?= h($course->title) ?></h3>
            <table>
                <tr>
                    <th class="narrow1"><?= __('Description') ?></th>
                    <td><?= h($course->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($course->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sections') ?></h4>
                <?= $this->Html->link(__('New Section'), ['controller' => 'Admins', 'action' => 'addSection', '?' => ['course_id' => $course->id]], ['class' => 'side-nav-item']) ?>
                <?php if (!empty($course->sections)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Title') ?></th>
                                <th><?= __('Description') ?></th>
                                <th><?= __('Video') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($course->sections as $sections) : ?>
                                <tr>
                                    <td><?= h($sections->title) ?></td>
                                    <td><?= h($sections->description) ?></td>
                                    <td><?= h($sections->video) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'viewSection', $sections->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'editSection', $sections->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'deleteSection', $sections->id], ['confirm' => __('Are you sure you want to delete "{0}"?', $sections->title)]) ?>
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
