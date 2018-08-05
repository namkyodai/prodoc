<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DecisionCode $decisionCode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="decisionCodes form large-9 medium-8 columns content">
    <?= $this->Form->create($decisionCode) ?>
    <fieldset>
        <legend><?= __('Add Decision Code') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
