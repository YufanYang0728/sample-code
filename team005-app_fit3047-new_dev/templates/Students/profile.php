<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Change your detail') ?></legend>
                <?php
                echo $this->Form->control('email');
                echo $this->Form->control('first_name');
                echo $this->Form->control('last_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<style>
    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: rosybrown;
        color:#f0f0f0 ;
        border-radius: 4px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
        justify-content: center;
    }

    .btn:hover {
        box-shadow: 0px 4px 16px ;
        color: #333;
    }
    .btn:active {
        box-shadow: none;
        color: #333;
    }
    .users.form {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 14px;
        box-shadow: 20px 12px 14px rgba(0, 0, 0, 0.1);
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100vh;
    }
</style>
