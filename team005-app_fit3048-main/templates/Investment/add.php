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
            <?= $this->Html->link(__('List Investment'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="investment form content">
            <?= $this->Form->create($investment) ?>
            <fieldset>
                <legend><?= __('Add Investment') ?></legend>
                <?php
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('investment_name');
                    echo $this->Form->control('admin_fee');
                    echo $this->Form->control('investment_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
