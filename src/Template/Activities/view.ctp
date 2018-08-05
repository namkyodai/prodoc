<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Activity'), ['action' => 'edit', $activity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Activity'), ['action' => 'delete', $activity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Activities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Activity Types'), ['controller' => 'ActivityTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity Type'), ['controller' => 'ActivityTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Minutes'), ['controller' => 'Minutes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Minute'), ['controller' => 'Minutes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="activities view large-9 medium-8 columns content">
    <h3><?= h($activity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($activity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity Type') ?></th>
            <td><?= $activity->has('activity_type') ? $this->Html->link($activity->activity_type->name, ['controller' => 'ActivityTypes', 'action' => 'view', $activity->activity_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Objectives') ?></th>
            <td><?= h($activity->objectives) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($activity->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minute File') ?></th>
            <td><?= h($activity->minute_file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Attendance Sheet') ?></th>
            <td><?= h($activity->attendance_sheet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minute Dir') ?></th>
            <td><?= h($activity->minute_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($activity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($activity->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Minutes') ?></h4>
        <?php if (!empty($activity->minutes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Subject Id') ?></th>
                <th scope="col"><?= __('Minute') ?></th>
                <th scope="col"><?= __('Action') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('People Id') ?></th>
                <th scope="col"><?= __('Due Date') ?></th>
                <th scope="col"><?= __('Actual Date') ?></th>
                <th scope="col"><?= __('Traffic') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Activity Id') ?></th>
                <th scope="col"><?= __('Work Package Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Discipline Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($activity->minutes as $minutes): ?>
            <tr>
                <td><?= h($minutes->id) ?></td>
                <td><?= h($minutes->subject_id) ?></td>
                <td><?= h($minutes->minute) ?></td>
                <td><?= h($minutes->action) ?></td>
                <td><?= h($minutes->status) ?></td>
                <td><?= h($minutes->people_id) ?></td>
                <td><?= h($minutes->due_date) ?></td>
                <td><?= h($minutes->actual_date) ?></td>
                <td><?= h($minutes->traffic) ?></td>
                <td><?= h($minutes->created) ?></td>
                <td><?= h($minutes->modified) ?></td>
                <td><?= h($minutes->activity_id) ?></td>
                <td><?= h($minutes->work_package_id) ?></td>
                <td><?= h($minutes->area_id) ?></td>
                <td><?= h($minutes->discipline_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Minutes', 'action' => 'view', $minutes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Minutes', 'action' => 'edit', $minutes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Minutes', 'action' => 'delete', $minutes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $minutes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
