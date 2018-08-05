<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People $people
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $people->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Peoples'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stakeholders'), ['controller' => 'Stakeholders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stakeholder'), ['controller' => 'Stakeholders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peoples form large-9 medium-8 columns content">
    <?= $this->Form->create($people) ?>
    <fieldset>
        <legend><?= __('Edit People') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('stakeholder_id', ['options' => $stakeholders, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
