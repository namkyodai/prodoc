<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Minute $minute
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Minutes'), ['action' => 'index']) ?></li>
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
<div class="minutes form large-9 medium-8 columns content">
    <?= $this->Form->create($minute) ?>
    <fieldset>
        <legend><?= __('Add Minute') ?></legend>
        <?php
            echo $this->Form->control('subject_id', ['options' => $subjects]);
            echo $this->Form->control('minute');
            echo $this->Form->control('action');
            echo $this->Form->control('status_id', ['options' => $statuss, 'empty' => true]);
            echo $this->Form->control('people_id', ['options' => $peoples, 'empty' => true]);
            echo $this->Form->control('due_date', ['empty' => true]);
            echo $this->Form->control('actual_date', ['empty' => true]);
            echo $this->Form->control('traffic');
            echo $this->Form->control('activity_id', ['options' => $activities, 'empty' => true]);
            echo $this->Form->control('work_package_id', ['options' => $workPackages, 'empty' => true]);
            echo $this->Form->control('area_id', ['options' => $areas, 'empty' => true]);
            echo $this->Form->control('discipline_id', ['options' => $disciplines, 'empty' => true]);
            echo $this->Form->control('repeated');
            echo $this->Form->control('reference');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
