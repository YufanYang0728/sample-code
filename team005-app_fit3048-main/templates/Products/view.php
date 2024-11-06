<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->product_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->product_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $this->Number->format($product->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monthly Fee') ?></th>
                    <td><?= $this->Number->format($product->monthly_fee) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Modules') ?></h4>
                <?php if (!empty($product->modules)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Module Id') ?></th>
                            <th><?= __('Module Name') ?></th>
                            <th><?= __('Paid') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->modules as $modules) : ?>
                        <tr>
                            <td><?= h($modules->module_id) ?></td>
                            <td><?= h($modules->module_name) ?></td>
                            <td><?= h($modules->paid) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Modules', 'action' => 'view', $modules->module_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Modules', 'action' => 'edit', $modules->module_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Modules', 'action' => 'delete', $modules->module_id], ['confirm' => __('Are you sure you want to delete # {0}?', $modules->module_id)]) ?>
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
