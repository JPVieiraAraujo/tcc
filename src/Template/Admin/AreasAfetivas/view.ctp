<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreasAfetiva $areasAfetiva
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Areas Afetiva'), ['action' => 'edit', $areasAfetiva->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Areas Afetiva'), ['action' => 'delete', $areasAfetiva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areasAfetiva->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas Afetivas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Afetiva'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avals'), ['controller' => 'Avals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aval'), ['controller' => 'Avals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areasAfetivas view large-9 medium-8 columns content">
    <h3><?= h($areasAfetiva->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($areasAfetiva->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($areasAfetiva->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($areasAfetiva->texto)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Avals') ?></h4>
        <?php if (!empty($areasAfetiva->avals)): ?>
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
            <?php foreach ($areasAfetiva->avals as $avals): ?>
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
