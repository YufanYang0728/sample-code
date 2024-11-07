<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>

<section id="users" class="page-section bg-light">
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="modules index content">

                    <h3><?= __('Modules') ?></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="text-align: left;background-color:rgba(139,216,237,0.8) ">
                                <tr>
                                    <th><?= $this->Paginator->sort('module_id') ?></th>
                                    <th><?= $this->Paginator->sort('module_name') ?></th>
                                    <th><?= $this->Paginator->sort('paid') ?></th>
                                    <th class="actions" style="color: steelblue"><?= __('Actions') ?></th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($modules as $module): ?>
                                <tr>
                                    <td><?= $this->Number->format($module->module_id) ?></td>
                                    <td><?= h($module->module_name) ?></td>
                                    <td><?= h($module->paid) ?></td>
                                    <td class="actions" style="color: #FFFFff">
                                        <button type="button" class="btn btn-outline-success "> <?= $this->Html->link(__('View'), ['action' => 'view', $module->module_id]) ?></button>
                                        <button type="button" class="btn btn-outline-info "><?= $this->Html->link(__('Edit'), ['action' => 'edit', $module->module_id]) ?></button>
                                        <button type="button" class="btn btn-outline-danger "><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $module->module_id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->module_id)]) ?></button>


                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="paginator" style="text-align: center;">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 150px"><?= $this->Paginator->prev('< ' . __('previous'));?></button>
            <?= $this->Paginator->numbers() ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 150px"><?= $this->Paginator->next(__('next') . ' >') ?></button>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 150px"><?= $this->Html->link(__('New Module'), ['action' => 'add'], ['class' => 'button float-right']) ?></button>

        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div >

</div>
</section>

<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>

