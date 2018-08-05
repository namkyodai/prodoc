<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkPackage $workPackage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Work Package'), ['action' => 'edit', $workPackage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Work Package'), ['action' => 'delete', $workPackage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workPackage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Work Packages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Package'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="workPackages view large-9 medium-8 columns content">
    <h3><?= h($workPackage->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($workPackage->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($workPackage->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($workPackage->id) ?></td>
        </tr>
    </table>
</div>
