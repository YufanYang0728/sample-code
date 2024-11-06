<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Section> $sections
 */
?>
<div class="sections index content">
    <?= $this->Html->link(__('New Section'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sections') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('video') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sections as $section): ?>
                <tr>
                    <td><?= h($section->id) ?></td>
                    <td><?= $section->has('course') ? $this->Html->link($section->course->title, ['controller' => 'Courses', 'action' => 'view', $section->course->id]) : '' ?></td>
                    <td><?= h($section->description) ?></td>
                    <td><?= h($section->title) ?></td>
                    <td><?= h($section->video) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $section->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $section->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $section->id], ['confirm' => __('Are you sure you want to delete # {0}?', $section->id)]) ?>
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
