<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Turbine[]|\Cake\Collection\CollectionInterface $turbines
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Turbine'), ['action' => 'add'],  ['class' => 'btn btn-info']) ?></li>
    </ul>
</nav>
<div class="turbines index large-9 medium-8 columns content">
    <h3><?= __('Turbines') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="id"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions" colspan="2"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turbines as $turbine): ?>
            <tr>
                <td class="id"><?= $this->Number->format($turbine->id) ?></td>
                <td><?= h($turbine->model) ?></td>
                <td><?= $this->Number->format($turbine->price) ?></td>
                <td><?= h($turbine->created) ?></td>
                <td><?= h($turbine->modified) ?></td>
                <td class="actions" colspan="2">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $turbine->id], ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turbine->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turbine->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $turbine->id)]) ?>
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
