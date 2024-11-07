<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->module_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->module_id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->module_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Module'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modules view content">
            <h3><?= h($module->module_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Module Name') ?></th>
                    <td><?= h($module->module_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Module Id') ?></th>
                    <td><?= $this->Number->format($module->module_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paid') ?></th>
                    <td><?= $module->paid ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($module->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Monthly Fee') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($module->products as $products) : ?>
                        <tr>
                            <td><?= h($products->product_id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->monthly_fee) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->product_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->product_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->product_id)]) ?>
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
