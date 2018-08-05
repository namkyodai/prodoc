<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People $people
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People'), ['action' => 'edit', $people->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People'), ['action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Peoples'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stakeholders'), ['controller' => 'Stakeholders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stakeholder'), ['controller' => 'Stakeholders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peoples view large-9 medium-8 columns content">
    <h3><?= h($people->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($people->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stakeholder') ?></th>
            <td><?= $people->has('stakeholder') ? $this->Html->link($people->stakeholder->name, ['controller' => 'Stakeholders', 'action' => 'view', $people->stakeholder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($people->id) ?></td>
        </tr>
    </table>
</div>
