<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivityType[]|\Cake\Collection\CollectionInterface $activityTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Activity Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="activityTypes index large-9 medium-8 columns content">
    <h3><?= __('Activity Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activityTypes as $activityType): ?>
            <tr>
                <td><?= $this->Number->format($activityType->id) ?></td>
                <td><?= h($activityType->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $activityType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activityType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $activityType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activityType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
