<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studentt $studentt
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $studentt->name],
                ['confirm' => __('Are you sure you want to delete # {0}?', $studentt->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Studentt'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="studentt form large-9 medium-8 columns content">
    <?= $this->Form->create($studentt) ?>
    <fieldset>
        <legend><?= __('Edit Studentt') ?></legend>
        <?php
            echo $this->Form->control('assistance');
            echo $this->Form->control('courses');
            echo $this->Form->control('chores');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
