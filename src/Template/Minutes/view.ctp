<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Minute $minute
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Minute'), ['action' => 'edit', $minute->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Minute'), ['action' => 'delete', $minute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $minute->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Minutes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Minute'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuss'), ['controller' => 'Statuss', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuss', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peoples'), ['controller' => 'Peoples', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People'), ['controller' => 'Peoples', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Work Packages'), ['controller' => 'WorkPackages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Package'), ['controller' => 'WorkPackages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplines'), ['controller' => 'Disciplines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discipline'), ['controller' => 'Disciplines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="minutes view large-9 medium-8 columns content">
    <h3><?= h($minute->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= $minute->has('subject') ? $this->Html->link($minute->subject->name, ['controller' => 'Subjects', 'action' => 'view', $minute->subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minute') ?></th>
            <td><?= h($minute->minute) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($minute->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $minute->has('status') ? $this->Html->link($minute->status->name, ['controller' => 'Statuss', 'action' => 'view', $minute->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('People') ?></th>
            <td><?= $minute->has('people') ? $this->Html->link($minute->people->name, ['controller' => 'Peoples', 'action' => 'view', $minute->people->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity') ?></th>
            <td><?= $minute->has('activity') ? $this->Html->link($minute->activity->name, ['controller' => 'Activities', 'action' => 'view', $minute->activity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Package') ?></th>
            <td><?= $minute->has('work_package') ? $this->Html->link($minute->work_package->name, ['controller' => 'WorkPackages', 'action' => 'view', $minute->work_package->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $minute->has('area') ? $this->Html->link($minute->area->name, ['controller' => 'Areas', 'action' => 'view', $minute->area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discipline') ?></th>
            <td><?= $minute->has('discipline') ? $this->Html->link($minute->discipline->name, ['controller' => 'Disciplines', 'action' => 'view', $minute->discipline->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Repeated') ?></th>
            <td><?= h($minute->repeated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reference') ?></th>
            <td><?= h($minute->reference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($minute->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Traffic') ?></th>
            <td><?= $this->Number->format($minute->traffic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Due Date') ?></th>
            <td><?= h($minute->due_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actual Date') ?></th>
            <td><?= h($minute->actual_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($minute->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($minute->modified) ?></td>
        </tr>
    </table>
</div>
