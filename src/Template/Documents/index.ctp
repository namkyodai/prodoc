<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuss'), ['controller' => 'Statuss', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuss', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['controller' => 'DecisionCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision Code'), ['controller' => 'DecisionCodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Work Packages'), ['controller' => 'WorkPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Work Package'), ['controller' => 'WorkPackages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplines'), ['controller' => 'Disciplines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discipline'), ['controller' => 'Disciplines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documents index large-9 medium-8 columns content">
    <h3><?= __('Documents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('revision_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decision_code_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_package_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discipline_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('document_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sequence') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planned_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('submitted_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('due_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($documents as $document): ?>
            <tr>
                <td><?= $this->Number->format($document->id) ?></td>
                <td><?= h($document->name) ?></td>
                <td><?= h($document->number) ?></td>
                <td><?= $document->has('revision') ? $this->Html->link($document->revision->name, ['controller' => 'Revisions', 'action' => 'view', $document->revision->id]) : '' ?></td>
                <td><?= $document->has('status') ? $this->Html->link($document->status->name, ['controller' => 'Statuss', 'action' => 'view', $document->status->id]) : '' ?></td>
                <td><?= $document->has('decision_code') ? $this->Html->link($document->decision_code->name, ['controller' => 'DecisionCodes', 'action' => 'view', $document->decision_code->id]) : '' ?></td>
                <td><?= $document->has('work_package') ? $this->Html->link($document->work_package->name, ['controller' => 'WorkPackages', 'action' => 'view', $document->work_package->id]) : '' ?></td>
                <td><?= $document->has('area') ? $this->Html->link($document->area->name, ['controller' => 'Areas', 'action' => 'view', $document->area->id]) : '' ?></td>
                <td><?= $document->has('discipline') ? $this->Html->link($document->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $document->discipline->id]) : '' ?></td>
                <td><?= $document->has('document_type') ? $this->Html->link($document->document_type->name, ['controller' => 'DocumentTypes', 'action' => 'view', $document->document_type->id]) : '' ?></td>
                <td><?= h($document->sequence) ?></td>
                <td><?= h($document->planned_date) ?></td>
                <td><?= h($document->submitted_date) ?></td>
                <td><?= h($document->due_date) ?></td>
                <td><?= h($document->doc_link) ?></td>
                <td><?= h($document->doc_dir) ?></td>
                <td><?= h($document->file_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $document->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $document->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
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
