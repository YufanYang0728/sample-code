<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Option> $options
 */
?>
<div class="options index content">
    <?= $this->Html->link(__('New Option'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Options') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('questions_id') ?></th>
                    <th><?= $this->Paginator->sort('prompt') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($options as $option): ?>
                <tr>
                    <td><?= h($option->id) ?></td>
                    <td><?= $option->has('question') ? $this->Html->link($option->question->title, ['controller' => 'Questions', 'action' => 'view', $option->question->id]) : '' ?></td>
                    <td><?= h($option->prompt) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $option->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $option->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
