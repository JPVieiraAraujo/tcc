<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreasCognitiva $areasCognitiva
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Areas Cognitiva'), ['action' => 'edit', $areasCognitiva->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Areas Cognitiva'), ['action' => 'delete', $areasCognitiva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areasCognitiva->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas Cognitivas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Cognitiva'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avals'), ['controller' => 'Avals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aval'), ['controller' => 'Avals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areasCognitivas view large-9 medium-8 columns content">
    <h3><?= h($areasCognitiva->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($areasCognitiva->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($areasCognitiva->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($areasCognitiva->texto)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Avals') ?></h4>
        <?php if (!empty($areasCognitiva->avals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Areas Motora Id') ?></th>
                <th scope="col"><?= __('Areas Afetiva Id') ?></th>
                <th scope="col"><?= __('Areas Cognitiva Id') ?></th>
                <th scope="col"><?= __('Areas Social Id') ?></th>
                <th scope="col"><?= __('Motora1') ?></th>
                <th scope="col"><?= __('Motora2') ?></th>
                <th scope="col"><?= __('Motora3') ?></th>
                <th scope="col"><?= __('Afetiva1') ?></th>
                <th scope="col"><?= __('Afetiva2') ?></th>
                <th scope="col"><?= __('Afetiva3') ?></th>
                <th scope="col"><?= __('Cognitiva1') ?></th>
                <th scope="col"><?= __('Cognitiva2') ?></th>
                <th scope="col"><?= __('Cognitiva3') ?></th>
                <th scope="col"><?= __('Social1') ?></th>
                <th scope="col"><?= __('Social2') ?></th>
                <th scope="col"><?= __('Social3') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($areasCognitiva->avals as $avals): ?>
            <tr>
                <td><?= h($avals->id) ?></td>
                <td><?= h($avals->aluno_id) ?></td>
                <td><?= h($avals->areas_motora_id) ?></td>
                <td><?= h($avals->areas_afetiva_id) ?></td>
                <td><?= h($avals->areas_cognitiva_id) ?></td>
                <td><?= h($avals->areas_social_id) ?></td>
                <td><?= h($avals->motora1) ?></td>
                <td><?= h($avals->motora2) ?></td>
                <td><?= h($avals->motora3) ?></td>
                <td><?= h($avals->afetiva1) ?></td>
                <td><?= h($avals->afetiva2) ?></td>
                <td><?= h($avals->afetiva3) ?></td>
                <td><?= h($avals->cognitiva1) ?></td>
                <td><?= h($avals->cognitiva2) ?></td>
                <td><?= h($avals->cognitiva3) ?></td>
                <td><?= h($avals->social1) ?></td>
                <td><?= h($avals->social2) ?></td>
                <td><?= h($avals->social3) ?></td>
                <td><?= h($avals->created) ?></td>
                <td><?= h($avals->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Avals', 'action' => 'view', $avals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Avals', 'action' => 'edit', $avals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Avals', 'action' => 'delete', $avals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
