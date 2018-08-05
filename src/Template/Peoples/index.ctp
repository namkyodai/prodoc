<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People[]|\Cake\Collection\CollectionInterface $peoples
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stakeholders'), ['controller' => 'Stakeholders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stakeholder'), ['controller' => 'Stakeholders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peoples index large-9 medium-8 columns content">
    <h3><?= __('Peoples') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stakeholder_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peoples as $people): ?>
            <tr>
                <td><?= $this->Number->format($people->id) ?></td>
                <td><?= h($people->name) ?></td>
                <td><?= $people->has('stakeholder') ? $this->Html->link($people->stakeholder->name, ['controller' => 'Stakeholders', 'action' => 'view', $people->stakeholder->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
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
