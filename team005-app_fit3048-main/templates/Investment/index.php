<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Investment[]|\Cake\Collection\CollectionInterface $investment
 */
?>
<div class="investment index content">
    <?= $this->Html->link(__('New Investment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Investment') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('investment_id') ?></th>
                    <th><?= $this->Paginator->sort('company_name') ?></th>
                    <th><?= $this->Paginator->sort('investment_name') ?></th>
                    <th><?= $this->Paginator->sort('admin_fee') ?></th>
                    <th><?= $this->Paginator->sort('investment_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($investment as $investment): ?>
                <tr>
                    <td><?= $this->Number->format($investment->investment_id) ?></td>
                    <td><?= h($investment->company_name) ?></td>
                    <td><?= h($investment->investment_name) ?></td>
                    <td><?= $this->Number->format($investment->admin_fee) ?></td>
                    <td><?= h($investment->investment_type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $investment->investment_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $investment->investment_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $investment->investment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $investment->investment_id)]) ?>
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
