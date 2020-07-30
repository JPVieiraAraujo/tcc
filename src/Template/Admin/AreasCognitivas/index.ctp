<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreasCognitiva[]|\Cake\Collection\CollectionInterface $areasCognitivas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Areas Cognitiva'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avals'), ['controller' => 'Avals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aval'), ['controller' => 'Avals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areasCognitivas index large-9 medium-8 columns content">
    <h3><?= __('Areas Cognitivas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areasCognitivas as $areasCognitiva): ?>
            <tr>
                <td><?= $this->Number->format($areasCognitiva->id) ?></td>
                <td><?= h($areasCognitiva->nivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areasCognitiva->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areasCognitiva->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areasCognitiva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areasCognitiva->id)]) ?>
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
