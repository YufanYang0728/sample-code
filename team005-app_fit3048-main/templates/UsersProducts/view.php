<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersProduct $usersProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Users Product'), ['action' => 'edit', $usersProduct->users_products_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Product'), ['action' => 'delete', $usersProduct->users_products_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersProduct->users_products_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersProducts view content">
            <h3><?= h($usersProduct->users_products_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $usersProduct->has('user') ? $this->Html->link($usersProduct->user->user_id, ['controller' => 'Users', 'action' => 'view', $usersProduct->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $usersProduct->has('product') ? $this->Html->link($usersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $usersProduct->product->product_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Products Id') ?></th>
                    <td><?= $this->Number->format($usersProduct->users_products_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
