<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Change User Password - Users');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Delete User'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="p-5"></div>
    <div class="p-5"></div>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user, ['class' => 'form']) ?>
            <fieldset>
                <legend><?= __('Change Password for ') ?> <u><?= h($user->first_name) ?> <?= h($user->last_name) ?></u></legend>
                <div class="row mb-3">
                    <?= $this->Form->control('password', [
                        'label' => 'New Password',
                        'value' => '',  // Ensure password is not sending back to the client side
                        'templates' => ['inputContainer' => '{{content}}'],
                        'class' => 'form-control',
                    ]); ?>
                </div>
                <div class="row mb-3">
                    <?= $this->Form->control('password_confirm', [
                        'type' => 'password',
                        'value' => '',  // Ensure password is not sending back to the client side
                        'label' => 'Retype New Password',
                        'templates' => ['inputContainer' => '{{content}}'],
                        'class' => 'form-control',
                    ]); ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>

            </fieldset>
            <?= $this->Form->end() ?>


        </div>
    </div>
</div>

