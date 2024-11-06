
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f6f6;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #171616;
            font-weight: bold;
        }

        .search-form {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            padding: 8px;
            font-size: 16px;
            width: 300px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .search-form input[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .actions {
            margin-bottom: 20px;
            overflow: hidden;
        }

        .actions .button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #333;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 4px;
            transition: background-color 0.3s;
            float: right;
            font-weight: bold;
        }

        .actions .button:hover {
            background-color: #171616;
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 20px;
            border: 3px solid #171616;
            border-radius: 5px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        }

        .table th,
        .table td {
            border: 1px solid #171616;
            padding: 12px;
            text-align: left;
        }

        .table th {
            background-color: #171616;
            color: #fff;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background: linear-gradient(to right, #FFE5B4, #f2f2f2);
        }

        .pagination {
            display: inline-block;
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .pagination li {
            display: inline;
        }

        .pagination li a {
            color: #171616;
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
            border: 1px solid #ddd;
            margin: 0 4px;
        }

        .pagination li a.active {
            background-color: #333;
            color: white;
            border: 1px solid #333;
            font-weight: bold;
        }

        .pagination li a:hover:not(.active) {
            background-color: #ddd;
        }

        .paginator {
            margin-top: 20px;
        }
    </style>

</head>
<body>
<div class="container">
    <h1>User Management</h1>
    <div class="actions">
        <a href="<?= $this->Url->build(['action' => 'adminAdd']) ?>" class="button float-right">Add New Admin</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('first_name') ?></th>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('level') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= $user->level === 2 ? 'admin' : ($user->level === 3 ? 'student' : '') ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Html->link(__('Change Password'), ['controller' => 'admins', 'action' => 'changePassword', $user->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $user->id],
                            ['confirm' => __('Are you sure you want to delete user "{0} {1}"?', $user->first_name, $user->last_name), 'class' => 'side-nav-item']
                        ) ?>
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


</body>
</html>





































