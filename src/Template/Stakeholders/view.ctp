<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stakeholder $stakeholder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stakeholder'), ['action' => 'edit', $stakeholder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stakeholder'), ['action' => 'delete', $stakeholder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stakeholder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stakeholders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stakeholder'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stakeholders view large-9 medium-8 columns content">
    <h3><?= h($stakeholder->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($stakeholder->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stakeholder->id) ?></td>
        </tr>
    </table>
</div>
