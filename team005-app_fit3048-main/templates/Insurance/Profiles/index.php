<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Profile> $profiles
 */
?>
<div class="profiles index content">
    <?= $this->Html->link(__('New Profile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('tobacco_smoked') ?></th>
                    <th><?= $this->Paginator->sort('occupation') ?></th>
                    <th><?= $this->Paginator->sort('annual_income') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('home_loan') ?></th>
                    <th><?= $this->Paginator->sort('debt') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profiles as $profile): ?>
                <tr>
                    <td><?= h($profile->id) ?></td>
                    <td><?= $profile->has('user') ? $this->Html->link($profile->user->id, ['controller' => 'Users', 'action' => 'view', $profile->user->id]) : '' ?></td>
                    <td><?= h($profile->gender) ?></td>
                    <td><?= h($profile->state) ?></td>
                    <td><?= h($profile->tobacco_smoked) ?></td>
                    <td><?= h($profile->occupation) ?></td>
                    <td><?= $this->Number->format($profile->annual_income) ?></td>
                    <td><?= h($profile->created) ?></td>
                    <td><?= h($profile->modified) ?></td>
                    <td><?= $this->Number->format($profile->home_loan) ?></td>
                    <td><?= $this->Number->format($profile->debt) ?></td>
                    <td><?= h($profile->date_of_birth) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
