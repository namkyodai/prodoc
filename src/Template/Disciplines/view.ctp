<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discipline $discipline
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discipline'), ['action' => 'edit', $discipline->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discipline'), ['action' => 'delete', $discipline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discipline'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplines view large-9 medium-8 columns content">
    <h3><?= h($discipline->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($discipline->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($discipline->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discipline->id) ?></td>
        </tr>
    </table>
</div>
