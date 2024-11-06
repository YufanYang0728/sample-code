<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Option $option
 * @var \Cake\Collection\CollectionInterface|string[] $questions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Options'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="options form content">
            <?= $this->Form->create($option) ?>
            <fieldset>
                <legend><?= __('Add Option') ?></legend>
                <?php
                    echo $this->Form->control('questions_id', ['options' => $questions, 'empty' => true]);
                    echo $this->Form->control('prompt');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
