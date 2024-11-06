<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profiles view content">
            <h3><?= h($profile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($profile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $profile->has('user') ? $this->Html->link($profile->user->id, ['controller' => 'Users', 'action' => 'view', $profile->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($profile->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($profile->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occupation') ?></th>
                    <td><?= h($profile->occupation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Annual Income') ?></th>
                    <td><?= $this->Number->format($profile->annual_income) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($profile->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tobacco Smoked') ?></th>
                    <td><?= $profile->tobacco_smoked ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
