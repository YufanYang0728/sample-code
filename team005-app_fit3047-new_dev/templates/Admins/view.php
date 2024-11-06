<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<head>
    <style>
        /* Style for the form wrapper */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto;
            max-width: 1000px;
        }

        /* Style for the form content */
        .users.view.content {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin: 5px;
            padding: 20px;
        }

        /* Style for the table */
        .users.view.content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        /* Style for table headings */
        .users.view.content th {
            background-color: #f2f2f2;
            padding: 8px;
            text-align: left;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }

        /* Style for table cells */
        .users.view.content td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        /* Style for table actions */
        .users.view.content .actions a {
            margin-right: 10px;
            text-decoration: none;
        }

        /* Style for the related sections */
        .users.view.content .related {
            margin-top: 20px;
        }

        /* Style for the related section headings */
        .users.view.content .related h4 {
            margin-bottom: 10px;
        }

        /* Style for the related tables */
        .users.view.content .related table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Style for the related table headings */
        .users.view.content .related th {
            background-color: #f2f2f2;
            padding: 8px;
            text-align: left;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }

        /* Style for the related table cells */
        .users.view.content .related td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        /* Style for the back button */
        .side-nav a {
            display: block;
            font-size: 1rem;
            margin-bottom: 20px;
            text-decoration: none;
        }

        .side-nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <a href="#" onclick="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete user "{0} {1}"?', $user->first_name, $user->last_name), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
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
                    <th><?= __('Level') ?></th>
                    <td><?= $user->level === null ? '' : $this->Number->format($user->level) ?></td>
                </tr>
            </table>
            <!--<div class="related">
                <h4><?= __('Related Enrolments') ?></h4>
                <?php if (!empty($user->enrolments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->enrolments as $enrolments) : ?>
                        <tr>
                            <td><?= h($enrolments->id) ?></td>
                            <td><?= h($enrolments->course_id) ?></td>
                            <td><?= h($enrolments->user_id) ?></td>
                            <td><?= h($enrolments->date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $enrolments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $enrolments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $enrolments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Payments') ?></h4>
                <?php if (!empty($user->payments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Type') ?></th>
                        </tr>
                        <?php foreach ($user->payments as $payments) : ?>
                        <tr>
                            <td><?= h($payments->id) ?></td>
                            <td><?= h($payments->user_id) ?></td>
                            <td><?= h($payments->date) ?></td>
                            <td><?= h($payments->type) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div> -->
        </div>
    </div>
</div>
