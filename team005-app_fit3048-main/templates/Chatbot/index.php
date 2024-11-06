<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Chatbot> $chatbot
 */
?>
<section id="users" class="page-section bg-light">
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="modules index content">

                <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="text-align: left;background-color:rgba(139,216,237,0.8) ">
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('messages') ?></th>
                                    <th><?= $this->Paginator->sort('response') ?></th>
                                    <th class="actions" style="color: steelblue"><?= __('Actions') ?></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($chatbot as $chatbot): ?>
                                <tr>
                                    <td><?= $this->Number->format($chatbot->id) ?></td>
                                    <td><?= h($chatbot->messages) ?></td>
                                    <td><?= h($chatbot->response) ?></td>
                                    <td class="actions" style="color: #FFFFff">
                                        <button type="button" class="btn btn-outline-info "><?= $this->Html->link(__('Edit'), ['action' => 'edit', $chatbot->id]) ?></button>
                                        <button type="button" class="btn btn-outline-danger "><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chatbot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatbot->_id)]) ?></button>


                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
        </table>
    </div>
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
</section>
<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>
</div>
