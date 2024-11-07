<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsModule $productsModule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Products Module'), ['action' => 'edit', $productsModule->product_module_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Products Module'), ['action' => 'delete', $productsModule->product_module_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsModule->product_module_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products Modules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Products Module'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsModules view content">
            <h3><?= h($productsModule->product_module_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productsModule->has('product') ? $this->Html->link($productsModule->product->name, ['controller' => 'Products', 'action' => 'view', $productsModule->product->product_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= $productsModule->has('module') ? $this->Html->link($productsModule->module->module_id, ['controller' => 'Modules', 'action' => 'view', $productsModule->module->module_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Module Id') ?></th>
                    <td><?= $this->Number->format($productsModule->product_module_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
