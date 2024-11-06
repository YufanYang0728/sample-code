<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insurance $insurance
 * @var string[]|\Cake\Collection\CollectionInterface $packages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $insurance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $insurance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Insurances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurances form content">
            <?= $this->Form->create($insurance) ?>
            <fieldset>
                <legend><?= __('Edit Insurance') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('packages._ids', ['options' => $packages]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
