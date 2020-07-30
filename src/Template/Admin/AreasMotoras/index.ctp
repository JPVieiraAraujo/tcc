<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreasMotora[]|\Cake\Collection\CollectionInterface $areasMotoras
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Areas Motora'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avals'), ['controller' => 'Avals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aval'), ['controller' => 'Avals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areasMotoras index large-9 medium-8 columns content">
    <h3><?= __('Areas Motoras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areasMotoras as $areasMotora): ?>
            <tr>
                <td><?= $this->Number->format($areasMotora->id) ?></td>
                <td><?= h($areasMotora->nivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areasMotora->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areasMotora->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areasMotora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areasMotora->id)]) ?>
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
