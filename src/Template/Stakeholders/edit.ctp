<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stakeholder $stakeholder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stakeholder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stakeholder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stakeholders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stakeholders form large-9 medium-8 columns content">
    <?= $this->Form->create($stakeholder) ?>
    <fieldset>
        <legend><?= __('Edit Stakeholder') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
