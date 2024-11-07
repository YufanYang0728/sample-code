<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsModule[]|\Cake\Collection\CollectionInterface $productsModules
 */
?>
<section id="users" class="page-section bg-light">
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-body">
<div class="productsModules index content">



    <h3><?= __('Products Modules') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered"id="dataTable" width="100%"cellspacing="0">
            <thead style="text-align: left;background-color:rgba(139,216,237,0.8) ">
                <tr>
                    <th><?= $this->Paginator->sort('product_module_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('module_id') ?></th>
                    <th class="actions"style="color: steelblue"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productsModules as $productsModule): ?>
                <tr>
                    <td><?= $this->Number->format($productsModule->product_module_id) ?></td>
                    <td><?= $productsModule->has('product') ? $this->Html->link($productsModule->product->name, ['controller' => 'Products', 'action' => 'view', $productsModule->product->product_id]) : '' ?></td>
                    <td><?= $productsModule->has('module') ? $this->Html->link($productsModule->module->module_id, ['controller' => 'Modules', 'action' => 'view', $productsModule->module->module_id]) : '' ?></td>
                    <td class="actions">

                        <button type="button" class="btn btn-outline-success "> <?= $this->Html->link(__('View'), ['action' => 'view', $productsModule->product_module_id]) ?></button>
                        <button type="button" class="btn btn-outline-info "><?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsModule->product_module_id]) ?></button>
                        <button type="button" class="btn btn-outline-danger "><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsModule->product_module_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsModule->product_module_id)]) ?></button>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="paginator"style="text-align: center">
        <ul class="pagination"style="color: #FFFFff !important;">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1)"><?= $this->Paginator->prev('< ' . __('previous')) ?></button>
            <?= $this->Paginator->numbers() ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 120px"><?= $this->Paginator->next(__('next') . ' >') ?></button>

            <?= $this->Paginator->last(__('last') . ' >>') ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 120px"> <?= $this->Html->link(__('New Products Module'), ['action' => 'add'], ['class' => 'button float-right']) ?></button>

        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
</div>
</section>

<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>

