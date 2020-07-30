<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Avaliações</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(_('Avaliar'),
                    ['controller'=> 'Avals', 'action'=>'add'], 
                    ['class'=>'btn btn-outline-success btn-sm']);
            ?>
        </div>
</div>

<?= $this->Flash->render() ?>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Aluno</th>
                <th class="d-none d-lg-table-cell">Motora</th>
                <th class="d-none d-lg-table-cell">Afetiva</th>
                <th class="d-none d-lg-table-cell">Social</th>
                <th class="d-none d-lg-table-cell">Cognitiva</th>
                <th class="d-none d-lg-table-cell">Dt. Cadastro</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($avals as $aval): ?>
 
            <tr>  
                <td><?= $this->Number->format($aval->id) ?></td>
                <td><?= h($aval->aluno->nome) ?></td>
                <td><?= h($aval->areas_motora->nivel) ?>
                <td><?= h($aval->areas_afetiva->nivel) ?>
                <td><?= h($aval->areas_social->nivel) ?>
                <td class="d-none d-lg-table-cell"><?= h($aval->areas_cognitiva->nivel) ?>
                <td class="d-none d-lg-table-cell"><?= h($aval->created->format('d/m/y')) ?></td>
                <td class="text-center">
                    <span class="d-none d-md-block">
                        <?= $this->Html->link(__('Relatório'),
                            ['controller'=>'Avals',
                            'action' => 'gerarRelatorio', $aval->id],
                            ['class'=>'btn btn-outline-primary btn-sm'])
                        ?>
                        <?= $this->Html->link(__('Editar'),
                            ['controller'=>'Avals',
                            'action'=>'edit', $aval->id],
                            ['class'=>'btn btn-outline-warning btn-sm'])
                        ?>
                        <?= $this->Html->link(__('Dashboard'),
                            ['controller'=>'Avals',
                            'action' => 'gerarDashboard', $aval->id],
                            ['class'=>'btn btn-outline-secondary btn-sm'])
                        ?>
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                            <?= $this->Html->link(__('Visualizar'),
                                ['controller'=>'Avals',
                                'action' => 'view', $aval->id],
                                ['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('Editar'),
                                ['controller'=>'Aval',
                                'action'=>'edit', $aval->id],
                                ['class'=>'dropdown-item'])
                            ?>
                            <?= $this->Html->link(__('Dashboard'),
                                ['controller'=>'Avals',
                                'action' => 'gerarDashboard', $aval->id],
                                ['class'=>'btn btn-outline-secondary btn-sm'])
                            ?>
                        </div>
                    </div>
                    
                </td>                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->element('pagination'); ?>
        
</div>

