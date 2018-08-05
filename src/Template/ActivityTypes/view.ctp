<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivityType $activityType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Activity Type'), ['action' => 'edit', $activityType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Activity Type'), ['action' => 'delete', $activityType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activityType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Activity Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="activityTypes view large-9 medium-8 columns content">
    <h3><?= h($activityType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($activityType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($activityType->id) ?></td>
        </tr>
    </table>
</div>
