<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Turbine $turbine
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turbine'), ['action' => 'edit', $turbine->id], ['class' => 'btn btn-success']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turbine'), ['action' => 'delete', $turbine->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $turbine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Turbines'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?> </li>
        <li><?= $this->Html->link(__('New Turbine'), ['action' => 'add'], ['class' => 'btn btn-info']) ?> </li>
    </ul>
</nav>
<div class="turbines view large-9 medium-8 columns content">
    <h3>Turbine #<?= h($turbine->id) ?> - (<?= h($turbine->model) ?>)</h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($turbine->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turbine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($turbine->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($turbine->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($turbine->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($turbine->description)); ?>
    </div>
</div>
