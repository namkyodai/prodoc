<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuss'), ['controller' => 'Statuss', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuss', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['controller' => 'DecisionCodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision Code'), ['controller' => 'DecisionCodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Work Packages'), ['controller' => 'WorkPackages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Package'), ['controller' => 'WorkPackages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplines'), ['controller' => 'Disciplines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discipline'), ['controller' => 'Disciplines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Document Types'), ['controller' => 'DocumentTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Type'), ['controller' => 'DocumentTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documents view large-9 medium-8 columns content">
    <h3><?= h($document->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($document->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($document->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Revision') ?></th>
            <td><?= $document->has('revision') ? $this->Html->link($document->revision->name, ['controller' => 'Revisions', 'action' => 'view', $document->revision->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $document->has('status') ? $this->Html->link($document->status->name, ['controller' => 'Statuss', 'action' => 'view', $document->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decision Code') ?></th>
            <td><?= $document->has('decision_code') ? $this->Html->link($document->decision_code->name, ['controller' => 'DecisionCodes', 'action' => 'view', $document->decision_code->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Package') ?></th>
            <td><?= $document->has('work_package') ? $this->Html->link($document->work_package->name, ['controller' => 'WorkPackages', 'action' => 'view', $document->work_package->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $document->has('area') ? $this->Html->link($document->area->name, ['controller' => 'Areas', 'action' => 'view', $document->area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discipline') ?></th>
            <td><?= $document->has('discipline') ? $this->Html->link($document->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $document->discipline->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Document Type') ?></th>
            <td><?= $document->has('document_type') ? $this->Html->link($document->document_type->name, ['controller' => 'DocumentTypes', 'action' => 'view', $document->document_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sequence') ?></th>
            <td><?= h($document->sequence) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Link') ?></th>
            <td><?= h($document->doc_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Dir') ?></th>
            <td><?= h($document->doc_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Name') ?></th>
            <td><?= h($document->file_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($document->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planned Date') ?></th>
            <td><?= h($document->planned_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Submitted Date') ?></th>
            <td><?= h($document->submitted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Due Date') ?></th>
            <td><?= h($document->due_date) ?></td>
        </tr>
    </table>
</div>
