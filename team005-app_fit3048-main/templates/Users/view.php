<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->user_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email', 'readonly') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile Number') ?></th>
                    <td><?= h($user->mobile_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('DOB') ?></th>
                    <td><?= h($user->DOB) ?></td>
                </tr>
                <tr>
                    <th><?= __('postcode') ?></th>
                    <td><?= $this->Number->format($user->postcode) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Profile Fields') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->profile_fields)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Profiles') ?></h4>
                <?php if (!empty($user->profiles)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Gender') ?></th>
                                <th><?= __('State') ?></th>
                                <th><?= __('Tobacco Smoked') ?></th>
                                <th><?= __('Occupation') ?></th>
                                <th><?= __('Annual Income') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->profiles as $profiles) : ?>
                                <tr>
                                    <td><?= h($profiles->id) ?></td>
                                    <td><?= h($profiles->user_id) ?></td>
                                    <td><?= h($profiles->gender) ?></td>
                                    <td><?= h($profiles->state) ?></td>
                                    <td><?= h($profiles->tobacco_smoked) ?></td>
                                    <td><?= h($profiles->occupation) ?></td>
                                    <td><?= h($profiles->annual_income) ?></td>
                                    <td><?= h($profiles->created) ?></td>
                                    <td><?= h($profiles->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
<!--            <div class="related">-->
<!--                <h4>--><?php //= __('Related Quotes') ?><!--</h4>-->
<!--                --><?php //if (!empty($user->quotes)) : ?>
<!--                    <div class="table-responsive">-->
<!--                        <table>-->
<!--                            <tr>-->
<!--                                <th>--><?php //= __('Id') ?><!--</th>-->
<!--                                <th>--><?php //= __('Amount') ?><!--</th>-->
<!--                                <th>--><?php //= __('Application Method') ?><!--</th>-->
<!--                                <th>--><?php //= __('User Id') ?><!--</th>-->
<!--                                <th>--><?php //= __('Package Id') ?><!--</th>-->
<!--                                <th>--><?php //= __('Pay From Super') ?><!--</th>-->
<!--                                <th>--><?php //= __('Pay Wait Days') ?><!--</th>-->
<!--                                <th>--><?php //= __('Payment End Date') ?><!--</th>-->
<!--                                <th>--><?php //= __('Created') ?><!--</th>-->
<!--                                <th>--><?php //= __('Modified') ?><!--</th>-->
<!--                                <th class="actions">--><?php //= __('Actions') ?><!--</th>-->
<!--                            </tr>-->
<!--                            --><?php //foreach ($user->quotes as $quotes) : ?>
<!--                                <tr>-->
<!--                                    <td>--><?php //= h($quotes->id) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->amount) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->application_method) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->user_id) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->package_id) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->pay_from_super) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->pay_wait_days) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->payment_end_date) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->created) ?><!--</td>-->
<!--                                    <td>--><?php //= h($quotes->modified) ?><!--</td>-->
<!--                                    <td class="actions">-->
<!--                                        --><?php //= $this->Html->link(__('View'), ['controller' => 'Quotes', 'action' => 'view', $quotes->id]) ?>
<!--                                        --><?php //= $this->Html->link(__('Edit'), ['controller' => 'Quotes', 'action' => 'edit', $quotes->id]) ?>
<!--                                        --><?php //= $this->Form->postLink(__('Delete'), ['controller' => 'Quotes', 'action' => 'delete', $quotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotes->id)]) ?>
<!--                                    </td>-->
<!--                                </tr>-->
<!--                            --><?php //endforeach; ?>
<!--                        </table>-->
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--            </div>-->

        </div>
    </div>
</div>
