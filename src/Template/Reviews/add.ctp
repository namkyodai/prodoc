<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['controller' => 'DecisionCodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Decision Code'), ['controller' => 'DecisionCodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reviews form large-9 medium-8 columns content">
    <?= $this->Form->create($review) ?>
    <fieldset>
        <legend><?= __('Add Review') ?></legend>
        <?php
            echo $this->Form->control('review');
            echo $this->Form->control('file_name');
            echo $this->Form->control('note');
            echo $this->Form->control('decision_code_id', ['options' => $decisionCodes, 'empty' => true]);
            echo $this->Form->control('note_date');
            echo $this->Form->control('response');
            echo $this->Form->control('response_date', ['empty' => true]);
            echo $this->Form->control('accept_response');
            echo $this->Form->control('final_decision_code');
            echo $this->Form->control('remarks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
