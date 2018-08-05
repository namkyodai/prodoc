<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
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
<div class="documents form large-9 medium-8 columns content">
    <?= $this->Form->create($document) ?>
    <fieldset>
        <legend><?= __('Add Document') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('number');
            echo $this->Form->control('revision_id', ['options' => $revisions, 'empty' => true]);
            echo $this->Form->control('status_id', ['options' => $statuss, 'empty' => true]);
            echo $this->Form->control('decision_code_id', ['options' => $decisionCodes, 'empty' => true]);
            echo $this->Form->control('work_package_id', ['options' => $workPackages, 'empty' => true]);
            echo $this->Form->control('area_id', ['options' => $areas, 'empty' => true]);
            echo $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]);
            echo $this->Form->control('document_type_id', ['options' => $documentTypes, 'empty' => true]);
            echo $this->Form->control('sequence');
            echo $this->Form->control('planned_date', ['empty' => true]);
            echo $this->Form->control('submitted_date', ['empty' => true]);
            echo $this->Form->control('due_date', ['empty' => true]);
            echo $this->Form->control('doc_link');
            echo $this->Form->control('doc_dir');
            echo $this->Form->control('file_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
