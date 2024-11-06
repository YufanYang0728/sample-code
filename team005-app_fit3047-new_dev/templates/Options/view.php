<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Option $option
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Option'), ['action' => 'edit', $option->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Option'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Options'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Option'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="options view content">
            <h3><?= h($option->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($option->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= $option->has('question') ? $this->Html->link($option->question->title, ['controller' => 'Questions', 'action' => 'view', $option->question->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prompt') ?></th>
                    <td><?= h($option->prompt) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
