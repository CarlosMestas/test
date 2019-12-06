<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studentt[]|\Cake\Collection\CollectionInterface $studentt
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Studentt'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentt index large-9 medium-8 columns content">
    <h3><?= __('Studentt') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assistance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('courses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chores') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentt as $studentt): ?>
            <tr>
                <td><?= h($studentt->name) ?></td>
                <td><?= $this->Number->format($studentt->assistance) ?></td>
                <td><?= h($studentt->courses) ?></td>
                <td><?= h($studentt->chores) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $studentt->name]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentt->name]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentt->name], ['confirm' => __('Are you sure you want to delete # {0}?', $studentt->name)]) ?>
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
