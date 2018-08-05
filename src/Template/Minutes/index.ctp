<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Minute[]|\Cake\Collection\CollectionInterface $minutes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Minute'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuss'), ['controller' => 'Statuss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peoples'), ['controller' => 'Peoples', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New People'), ['controller' => 'Peoples', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Work Packages'), ['controller' => 'WorkPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Work Package'), ['controller' => 'WorkPackages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplines'), ['controller' => 'Disciplines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discipline'), ['controller' => 'Disciplines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="minutes index large-9 medium-8 columns content">
    <h3><?= __('Minutes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('minute') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('people_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('due_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actual_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('traffic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_package_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discipline_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('repeated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($minutes as $minute): ?>
            <tr>
                <td><?= $this->Number->format($minute->id) ?></td>
                <td><?= $minute->has('subject') ? $this->Html->link($minute->subject->name, ['controller' => 'Subjects', 'action' => 'view', $minute->subject->id]) : '' ?></td>
                <td><?= h($minute->minute) ?></td>
                <td><?= h($minute->action) ?></td>
                <td><?= $minute->has('status') ? $this->Html->link($minute->status->name, ['controller' => 'Statuss', 'action' => 'view', $minute->status->id]) : '' ?></td>
                <td><?= $minute->has('people') ? $this->Html->link($minute->people->name, ['controller' => 'Peoples', 'action' => 'view', $minute->people->id]) : '' ?></td>
                <td><?= h($minute->due_date) ?></td>
                <td><?= h($minute->actual_date) ?></td>
                <td><?= $this->Number->format($minute->traffic) ?></td>
                <td><?= h($minute->created) ?></td>
                <td><?= h($minute->modified) ?></td>
                <td><?= $minute->has('activity') ? $this->Html->link($minute->activity->name, ['controller' => 'Activities', 'action' => 'view', $minute->activity->id]) : '' ?></td>
                <td><?= $minute->has('work_package') ? $this->Html->link($minute->work_package->name, ['controller' => 'WorkPackages', 'action' => 'view', $minute->work_package->id]) : '' ?></td>
                <td><?= $minute->has('area') ? $this->Html->link($minute->area->name, ['controller' => 'Areas', 'action' => 'view', $minute->area->id]) : '' ?></td>
                <td><?= $minute->has('discipline') ? $this->Html->link($minute->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $minute->discipline->id]) : '' ?></td>
                <td><?= h($minute->repeated) ?></td>
                <td><?= h($minute->reference) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $minute->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $minute->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $minute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $minute->id)]) ?>
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
