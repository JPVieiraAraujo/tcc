<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aval $aval
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aval'), ['action' => 'edit', $aval->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aval'), ['action' => 'delete', $aval->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aval->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aval'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas Motoras'), ['controller' => 'AreasMotoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Motora'), ['controller' => 'AreasMotoras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas Afetivas'), ['controller' => 'AreasAfetivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Afetiva'), ['controller' => 'AreasAfetivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas Cognitivas'), ['controller' => 'AreasCognitivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Cognitiva'), ['controller' => 'AreasCognitivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas Socials'), ['controller' => 'AreasSocials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Social'), ['controller' => 'AreasSocials', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avals view large-9 medium-8 columns content">
    <h3><?= h($aval->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aluno') ?></th>
            <td><?= $aval->has('aluno') ? $this->Html->link($aval->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $aval->aluno->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Areas Motora') ?></th>
            <td><?= $aval->has('areas_motora') ? $this->Html->link($aval->areas_motora->id, ['controller' => 'AreasMotoras', 'action' => 'view', $aval->areas_motora->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Areas Afetiva') ?></th>
            <td><?= $aval->has('areas_afetiva') ? $this->Html->link($aval->areas_afetiva->id, ['controller' => 'AreasAfetivas', 'action' => 'view', $aval->areas_afetiva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Areas Cognitiva') ?></th>
            <td><?= $aval->has('areas_cognitiva') ? $this->Html->link($aval->areas_cognitiva->id, ['controller' => 'AreasCognitivas', 'action' => 'view', $aval->areas_cognitiva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Areas Social') ?></th>
            <td><?= $aval->has('areas_social') ? $this->Html->link($aval->areas_social->id, ['controller' => 'AreasSocials', 'action' => 'view', $aval->areas_social->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aval->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motora1') ?></th>
            <td><?= $this->Number->format($aval->motora1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motora2') ?></th>
            <td><?= $this->Number->format($aval->motora2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motora3') ?></th>
            <td><?= $this->Number->format($aval->motora3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afetiva1') ?></th>
            <td><?= $this->Number->format($aval->afetiva1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afetiva2') ?></th>
            <td><?= $this->Number->format($aval->afetiva2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afetiva3') ?></th>
            <td><?= $this->Number->format($aval->afetiva3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cognitiva1') ?></th>
            <td><?= $this->Number->format($aval->cognitiva1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cognitiva2') ?></th>
            <td><?= $this->Number->format($aval->cognitiva2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cognitiva3') ?></th>
            <td><?= $this->Number->format($aval->cognitiva3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social1') ?></th>
            <td><?= $this->Number->format($aval->social1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social2') ?></th>
            <td><?= $this->Number->format($aval->social2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Social3') ?></th>
            <td><?= $this->Number->format($aval->social3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aval->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aval->modified) ?></td>
        </tr>
    </table>
</div>
