<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Package $package
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Package'), ['action' => 'edit', $package->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Package'), ['action' => 'delete', $package->id], ['confirm' => __('Are you sure you want to delete # {0}?', $package->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Packages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Package'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packages view content">
            <h3><?= h($package->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($package->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $package->has('user') ? $this->Html->link($package->user->id, ['controller' => 'Users', 'action' => 'view', $package->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($package->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($package->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($package->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Insurances') ?></h4>
                <?php if (!empty($package->insurances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($package->insurances as $insurances) : ?>
                        <tr>
                            <td><?= h($insurances->id) ?></td>
                            <td><?= h($insurances->name) ?></td>
                            <td><?= h($insurances->description) ?></td>
                            <td><?= h($insurances->created) ?></td>
                            <td><?= h($insurances->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Insurances', 'action' => 'view', $insurances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Insurances', 'action' => 'edit', $insurances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Insurances', 'action' => 'delete', $insurances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurances->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Quotes') ?></h4>
                <?php if (!empty($package->quotes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Application Method') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Package Id') ?></th>
                            <th><?= __('Pay From Super') ?></th>
                            <th><?= __('Pay Wait Days') ?></th>
                            <th><?= __('Payment End Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($package->quotes as $quotes) : ?>
                        <tr>
                            <td><?= h($quotes->id) ?></td>
                            <td><?= h($quotes->amount) ?></td>
                            <td><?= h($quotes->application_method) ?></td>
                            <td><?= h($quotes->user_id) ?></td>
                            <td><?= h($quotes->package_id) ?></td>
                            <td><?= h($quotes->pay_from_super) ?></td>
                            <td><?= h($quotes->pay_wait_days) ?></td>
                            <td><?= h($quotes->payment_end_date) ?></td>
                            <td><?= h($quotes->created) ?></td>
                            <td><?= h($quotes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Quotes', 'action' => 'view', $quotes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Quotes', 'action' => 'edit', $quotes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quotes', 'action' => 'delete', $quotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
