<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turbine->id],
                ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $turbine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Turbines'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?></li>
    </ul>
</nav>
<div class="turbines form large-9 medium-8 columns content">
    <?= $this->Form->create($turbine) ?>
    <fieldset>
        <legend><?= __('Edit Turbine') ?></legend>
        <?php
            echo $this->Form->control('model');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
