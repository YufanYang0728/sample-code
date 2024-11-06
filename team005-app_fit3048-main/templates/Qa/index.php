<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Qa> $qa
 */
?>
<div class="qa index content">
   
    <div class="Qa index content">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Questions') ?></h1>
        <a href="<?=$this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Questions</a>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Question') ?></th>
                    <th><?= $this->Paginator->sort('Answer') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($qa as $qa): ?>
                <tr>
                    <td><?= $this->Number->format($qa->id) ?></td>
                    <td><?= h($qa->Question) ?></td>
                    <td><?= h($qa->Answer) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $qa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qa->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>
