<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Investment $investment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Investment'), ['action' => 'edit', $investment->investment_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Investment'), ['action' => 'delete', $investment->investment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $investment->investment_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Investment'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Investment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="investment view content">
            <h3><?= h($investment->investment_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($investment->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Investment Name') ?></th>
                    <td><?= h($investment->investment_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Investment Type') ?></th>
                    <td><?= h($investment->investment_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Investment Id') ?></th>
                    <td><?= $this->Number->format($investment->investment_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin Fee') ?></th>
                    <td><?= $this->Number->format($investment->admin_fee) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
