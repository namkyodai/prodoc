<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DecisionCode $decisionCode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $decisionCode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $decisionCode->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Decision Codes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="decisionCodes form large-9 medium-8 columns content">
    <?= $this->Form->create($decisionCode) ?>
    <fieldset>
        <legend><?= __('Edit Decision Code') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
