<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreasSocial $areasSocial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Areas Socials'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avals'), ['controller' => 'Avals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aval'), ['controller' => 'Avals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areasSocials form large-9 medium-8 columns content">
    <?= $this->Form->create($areasSocial) ?>
    <fieldset>
        <legend><?= __('Add Areas Social') ?></legend>
        <?php
            echo $this->Form->control('nivel');
            echo $this->Form->control('texto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
