<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentProvider $paymentProvider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payment Provider'), ['action' => 'edit', $paymentProvider->payment_provider_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment Provider'), ['action' => 'delete', $paymentProvider->payment_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentProvider->payment_provider_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payment Providers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment Provider'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentProviders view content">
            <h3><?= h($paymentProvider->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($paymentProvider->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Provider Id') ?></th>
                    <td><?= $this->Number->format($paymentProvider->payment_provider_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
