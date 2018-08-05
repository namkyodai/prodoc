<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['controller' => 'DecisionCodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decision Code'), ['controller' => 'DecisionCodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reviews view large-9 medium-8 columns content">
    <h3><?= h($review->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= h($review->review) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Name') ?></th>
            <td><?= h($review->file_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($review->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decision Code') ?></th>
            <td><?= $review->has('decision_code') ? $this->Html->link($review->decision_code->name, ['controller' => 'DecisionCodes', 'action' => 'view', $review->decision_code->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Response') ?></th>
            <td><?= h($review->response) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accept Response') ?></th>
            <td><?= h($review->accept_response) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($review->remarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($review->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Decision Code') ?></th>
            <td><?= $this->Number->format($review->final_decision_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note Date') ?></th>
            <td><?= h($review->note_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Response Date') ?></th>
            <td><?= h($review->response_date) ?></td>
        </tr>
    </table>
</div>
