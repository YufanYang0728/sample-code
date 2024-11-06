<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quote $quote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quote'), ['action' => 'edit', $quote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quote'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quotes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quote'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quotes view content">
            <h3><?= h($quote->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($quote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Application Method') ?></th>
                    <td><?= h($quote->application_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $quote->has('user') ? $this->Html->link($quote->user->id, ['controller' => 'Users', 'action' => 'view', $quote->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= $quote->has('package') ? $this->Html->link($quote->package->id, ['controller' => 'Packages', 'action' => 'view', $quote->package->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($quote->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay Wait Days') ?></th>
                    <td><?= $quote->pay_wait_days === null ? '' : $this->Number->format($quote->pay_wait_days) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment End Date') ?></th>
                    <td><?= $quote->payment_end_date === null ? '' : $this->Number->format($quote->payment_end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($quote->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($quote->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay From Super') ?></th>
                    <td><?= $quote->pay_from_super ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
