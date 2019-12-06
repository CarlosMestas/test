<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studentt $studentt
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Studentt'), ['action' => 'edit', $studentt->name]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Studentt'), ['action' => 'delete', $studentt->name], ['confirm' => __('Are you sure you want to delete # {0}?', $studentt->name)]) ?> </li>
        <li><?= $this->Html->link(__('List Studentt'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Studentt'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studentt view large-9 medium-8 columns content">
    <h3><?= h($studentt->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($studentt->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Courses') ?></th>
            <td><?= h($studentt->courses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chores') ?></th>
            <td><?= h($studentt->chores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assistance') ?></th>
            <td><?= $this->Number->format($studentt->assistance) ?></td>
        </tr>
    </table>
</div>
