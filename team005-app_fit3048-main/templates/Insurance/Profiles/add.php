<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profiles form content">
            <?= $this->Form->create($profile) ?>
            <fieldset>
                <legend><?= __('Add Profile') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('gender');
                    echo $this->Form->control('state');
                    echo $this->Form->control('tobacco_smoked');
                    echo $this->Form->control('occupation');
                    echo $this->Form->control('annual_income');
                    echo $this->Form->control('home_loan');
                    echo $this->Form->control('debt');
                    echo $this->Form->control('date_of_birth');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
