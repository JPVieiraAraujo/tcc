<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Turmas</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(_('Cadastrar'),
                    ['controller'=> 'turmas', 'action'=>'add'], 
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
                <th>Turma</th>
                <th class="d-none d-sm-table-cell">Professor</th>
                <th class="d-none d-sm-table-cell">Número Vaga</th>                
                <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($turmas as $turma): ?>
            <tr>
                
                <td><?= $this->Number->format($turma->id) ?></td>
                <td><?= h($turma->nome) ?></td>
                <td class="d-none d-sm-table-cell"><?= h($turma->user_id) ?></td>
                <td class="d-none d-lg-table-cell"><?= h($turma->n_vaga) ?></td>
                <td class="d-none d-lg-table-cell"><?= h($turma->created) ?></td>
                <td class="text-center">
                    <span class="d-none d-md-block">
                        <?= $this->Html->link(__('Visualizar'),
                            ['controller'=>'turmas',
                            'action' => 'view', $turma->id],
                            ['class'=>'btn btn-outline-primary btn-sm']) ?>
                        <?= $this->Html->link(__('Editar'),
                            ['controller'=>'turmas',
                            'action'=>'edit', $turma->id],
                            ['class'=>'btn btn-outline-warning btn-sm']) ?>
                        <?= $this->Form->postLink(__('Apagar'),
                            ['controller'=>'turmas',
                            'action'=>'delete', $turma->id],
                            ['class'=>'btn btn-outline-danger btn-sm',
                            'confirm'=>__('Realmente deseja apagar o usuário # {0}?', $turma->id)])
                        ?>
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                            <?= $this->Html->link(__('Visualizar'),
                                ['controller'=>'turmas',
                                'action' => 'view', $turma->id],
                                ['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('Editar'),
                                ['controller'=>'turmas',
                                'action'=>'edit', $turma->id],
                                ['class'=>'dropdown-item']) ?>
                            <?= $this->Form->postLink(__('Apagar'),
                                ['controller'=>'turmas',
                                'action'=>'delete', $turma->id],
                                ['class'=>'dropdown-item',
                                'confirm'=>__('Realmente deseja apagar o usuário # {0}?', $turma->id)])
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

