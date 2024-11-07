<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quote> $quotes
 */
?>
<div class="quotes index content">
    <h3><?= __('Quotes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('application_method') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('package_id') ?></th>
                    <th><?= $this->Paginator->sort('pay_from_super') ?></th>
                    <th><?= $this->Paginator->sort('pay_wait_days') ?></th>
                    <th><?= $this->Paginator->sort('payment_end_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quotes as $quote): ?>
                <tr>
                    <td><?= h($quote->id) ?></td>
                    <td><?= $this->Number->format($quote->amount) ?></td>
                    <td><?= h($quote->application_method) ?></td>
                    <td><?= $quote->has('user') ? $this->Html->link($quote->user->id, ['controller' => 'Users', 'action' => 'view', $quote->user->id]) : '' ?></td>
                    <td><?= $quote->has('package') ? $this->Html->link($quote->package->id, ['controller' => 'Packages', 'action' => 'view', $quote->package->id]) : '' ?></td>
                    <td><?= h($quote->pay_from_super) ?></td>
                    <td><?= $quote->pay_wait_days === null ? '' : $this->Number->format($quote->pay_wait_days) ?></td>
                    <td><?= $quote->payment_end_date === null ? '' : $this->Number->format($quote->payment_end_date) ?></td>
                    <td><?= h($quote->created) ?></td>
                    <td><?= h($quote->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quote->id]) ?>
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
