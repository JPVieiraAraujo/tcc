<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreasCognitiva $areasCognitiva
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $areasCognitiva->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $areasCognitiva->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Areas Cognitivas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avals'), ['controller' => 'Avals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aval'), ['controller' => 'Avals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areasCognitivas form large-9 medium-8 columns content">
    <?= $this->Form->create($areasCognitiva) ?>
    <fieldset>
        <legend><?= __('Edit Areas Cognitiva') ?></legend>
        <?php
            echo $this->Form->control('nivel');
            echo $this->Form->control('texto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
