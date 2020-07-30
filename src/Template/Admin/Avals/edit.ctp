<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aval $aval
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aval->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aval->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas Motoras'), ['controller' => 'AreasMotoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Areas Motora'), ['controller' => 'AreasMotoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas Afetivas'), ['controller' => 'AreasAfetivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Areas Afetiva'), ['controller' => 'AreasAfetivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas Cognitivas'), ['controller' => 'AreasCognitivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Areas Cognitiva'), ['controller' => 'AreasCognitivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas Socials'), ['controller' => 'AreasSocials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Areas Social'), ['controller' => 'AreasSocials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avals form large-9 medium-8 columns content">
    <?= $this->Form->create($aval) ?>
    <fieldset>
        <legend><?= __('Edit Aval') ?></legend>
        <?php
            echo $this->Form->control('aluno_id', ['options' => $alunos]);
            echo $this->Form->control('areas_motora_id', ['options' => $areasMotoras]);
            echo $this->Form->control('areas_afetiva_id', ['options' => $areasAfetivas]);
            echo $this->Form->control('areas_cognitiva_id', ['options' => $areasCognitivas]);
            echo $this->Form->control('areas_social_id', ['options' => $areasSocials]);
            echo $this->Form->control('motora1');
            echo $this->Form->control('motora2');
            echo $this->Form->control('motora3');
            echo $this->Form->control('afetiva1');
            echo $this->Form->control('afetiva2');
            echo $this->Form->control('afetiva3');
            echo $this->Form->control('cognitiva1');
            echo $this->Form->control('cognitiva2');
            echo $this->Form->control('cognitiva3');
            echo $this->Form->control('social1');
            echo $this->Form->control('social2');
            echo $this->Form->control('social3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
