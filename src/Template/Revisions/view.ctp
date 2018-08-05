<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Revision $revision
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Revision'), ['action' => 'edit', $revision->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Revision'), ['action' => 'delete', $revision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $revision->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Revisions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Revision'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="revisions view large-9 medium-8 columns content">
    <h3><?= h($revision->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($revision->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($revision->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Documents') ?></h4>
        <?php if (!empty($revision->documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('File Name') ?></th>
                <th scope="col"><?= __('Revision Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Work Package Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Discipline Id') ?></th>
                <th scope="col"><?= __('Document Type Id') ?></th>
                <th scope="col"><?= __('Sequence') ?></th>
                <th scope="col"><?= __('Planned Date') ?></th>
                <th scope="col"><?= __('Submitted Date') ?></th>
                <th scope="col"><?= __('Due Date') ?></th>
                <th scope="col"><?= __('Doc Link') ?></th>
                <th scope="col"><?= __('Doc Dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($revision->documents as $documents): ?>
            <tr>
                <td><?= h($documents->id) ?></td>
                <td><?= h($documents->name) ?></td>
                <td><?= h($documents->number) ?></td>
                <td><?= h($documents->file_name) ?></td>
                <td><?= h($documents->revision_id) ?></td>
                <td><?= h($documents->status_id) ?></td>
                <td><?= h($documents->work_package_id) ?></td>
                <td><?= h($documents->area_id) ?></td>
                <td><?= h($documents->discipline_id) ?></td>
                <td><?= h($documents->document_type_id) ?></td>
                <td><?= h($documents->sequence) ?></td>
                <td><?= h($documents->planned_date) ?></td>
                <td><?= h($documents->submitted_date) ?></td>
                <td><?= h($documents->due_date) ?></td>
                <td><?= h($documents->doc_link) ?></td>
                <td><?= h($documents->doc_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
