<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentProvider[]|\Cake\Collection\CollectionInterface $paymentProviders
 */
?>
<section id="users" class="page-section bg-light">
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-body">
<div class="paymentProviders index content">


    <h3><?= __('Payment Providers') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered"id="dataTable" width="100%" cellspacing="0">
            <thead style="text-align: left;background-color:rgba(139,216,237,0.8) ">
                <tr>
                    <th><?= $this->Paginator->sort('payment_provider_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions" style="color: steelblue"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paymentProviders as $paymentProvider): ?>
                <tr>
                    <td><?= $this->Number->format($paymentProvider->payment_provider_id) ?></td>
                    <td><?= h($paymentProvider->name) ?></td>
                    <td class="actions">

       
                        <button type="button" class="btn btn-outline-info "> <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentProvider->payment_provider_id]) ?></button>
                        <button type="button" class="btn btn-outline-danger "><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentProvider->payment_provider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentProvider->payment_provider_id)]) ?></button>




                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
<div class="paginator" style="text-align: center;">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 150px"><?= $this->Paginator->prev('< ' . __('previous'));?></button>
            <?= $this->Paginator->numbers() ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 150px"><?= $this->Paginator->next(__('next') . ' >') ?></button>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
            <button style="border: 0;background-color: rgba(139,216,237,0.8);color: #fff;border-radius: 20px;padding: 10px 20px;margin: 0 20px;box-shadow: 0 3px 6px rgba(0,0,0,0.1),0 3px 6px rgba(0,0,0,0.1);min-width: 150px"><?= $this->Html->link(__('New Payment Provider'), ['action' => 'add'], ['class' => 'button float-right']) ?></button>

        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
    </div>
</div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>

