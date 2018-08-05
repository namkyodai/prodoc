<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DecisionCode $decisionCode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Decision Code'), ['action' => 'edit', $decisionCode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Decision Code'), ['action' => 'delete', $decisionCode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decisionCode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision Code'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="decisionCodes view large-9 medium-8 columns content">
    <h3><?= h($decisionCode->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($decisionCode->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($decisionCode->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($decisionCode->id) ?></td>
        </tr>
    </table>
</div>
