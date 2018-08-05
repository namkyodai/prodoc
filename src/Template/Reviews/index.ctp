<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $reviews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['controller' => 'DecisionCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision Code'), ['controller' => 'DecisionCodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reviews index large-9 medium-8 columns content">
    <h3><?= __('Reviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decision_code_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('response') ?></th>
                <th scope="col"><?= $this->Paginator->sort('response_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accept_response') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_decision_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('remarks') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reviews as $review): ?>
            <tr>
                <td><?= $this->Number->format($review->id) ?></td>
                <td><?= h($review->review) ?></td>
                <td><?= h($review->file_name) ?></td>
                <td><?= h($review->note) ?></td>
                <td><?= $review->has('decision_code') ? $this->Html->link($review->decision_code->name, ['controller' => 'DecisionCodes', 'action' => 'view', $review->decision_code->id]) : '' ?></td>
                <td><?= h($review->note_date) ?></td>
                <td><?= h($review->response) ?></td>
                <td><?= h($review->response_date) ?></td>
                <td><?= h($review->accept_response) ?></td>
                <td><?= $this->Number->format($review->final_decision_code) ?></td>
                <td><?= h($review->remarks) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $review->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $review->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
