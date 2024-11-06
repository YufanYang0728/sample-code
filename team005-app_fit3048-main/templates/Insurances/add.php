<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Insurance $insurance
 * @var \Cake\Collection\CollectionInterface|string[] $packages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Insurances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurances form content">
            <p class="font-weight-bold">You are not allowed proceed with this operation.</p>
            <p>Please go to the database and add insurance manually.</p>
        </div>
    </div>
</div>
