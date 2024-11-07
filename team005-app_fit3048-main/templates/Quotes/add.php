<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quote $quote
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $packages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Quotes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quotes form content">
            <?= $this->Form->create($quote) ?>
            <fieldset>
                <legend><?= __('Add Quote') ?></legend>
                <?php
                    echo $this->Form->control('amount');
                    echo $this->Form->control('application_method');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('package_id', ['options' => $packages]);
                    echo $this->Form->control('pay_from_super');
                    echo $this->Form->control('pay_wait_days');
                    echo $this->Form->control('payment_end_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>