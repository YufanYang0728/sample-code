<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quiz'), ['action' => 'edit', $quiz->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quiz'), ['action' => 'delete', $quiz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quizzes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quiz'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quizzes view content">
            <h3><?= h($quiz->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($quiz->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $quiz->has('course') ? $this->Html->link($quiz->course->title, ['controller' => 'Courses', 'action' => 'view', $quiz->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($quiz->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($quiz->description) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
