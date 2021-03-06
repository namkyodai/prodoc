<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkPackage $workPackage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Work Packages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="workPackages form large-9 medium-8 columns content">
    <?= $this->Form->create($workPackage) ?>
    <fieldset>
        <legend><?= __('Add Work Package') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
