<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="questions view content">
            <h3><?= h($question->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($question->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $question->has('user') ? $this->Html->link($question->user->id, ['controller' => 'Users', 'action' => 'view', $question->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Stage') ?></th>
                    <td><?= h($question->stage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Audience Type') ?></th>
                    <td><?= h($question->audience_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Question Number') ?></th>
                    <td><?= $this->Number->format($question->question_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($question->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($question->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Prompt') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($question->prompt)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Possible Answers') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($question->possible_answers)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
