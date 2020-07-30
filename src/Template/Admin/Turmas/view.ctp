<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Turma</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['controller'=>'turmas',
                                    'action'=>'index'],
                                    ['class'=>'btn btn-outline-info btn-sm']) ?>

            <?= $this->Html->link(__('Editar'), ['controller'=>'turmas',
                                    'action'=>'edit', $turma->id],
                                    ['class'=>'btn btn-outline-warning btn-sm']) ?>

            <?= $this->Form->postLink(__('Apagar'), ['controller'=>'turmas',
                                    'action'=>'delete', $turma->id],
                                    ['class'=>'btn btn-outline-danger btn-sm',
                                    'confirm'=> __('Confirma Excluir a Turma # {0}?', $turma->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                <?= $this->Html->link(__('Listar'), ['controller'=>'turmas',
                                        'action'=>'index'],
                                        ['class'=>'dropdown-item']) ?>

                <?= $this->Html->link(__('Editar'), ['controller'=>'turmar',
                                        'action'=>'edit', $turma->id],
                                        ['class'=>'dropdown-item']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller'=>'turmas',
                                        'action'=>'delete', $turma->id],
                                        ['class'=>'dropdown-item',
                                        'confirm'=> __('Confirma Excluir a Turma # {0}?', $turma->id)]) ?>
            </div>
        </div>
    </div>
</div><hr>

<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($turma->id) ?></dd>

    <dt class="col-sm-3">Turma</dt>
    <dd class="col-sm-9"><?= h($turma->nome) ?></dd>

    <dt class="col-sm-3">Professor</dt>
    <dd class="col-sm-9"><?= h($turma->user_id) ?></dd>

    <dt class="col-sm-3">Nº de Vaga</dt>
    <dd class="col-sm-9"><?= h($turma->n_vaga) ?></dd>

    <dt class="col-sm-3 text-truncate">Cadastro</dt>
    <dd class="col-sm-9"><?= h($turma->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Alteração</dt>
    <dd class="col-sm-9"><?= h($turma->modified) ?></dd>

</dl>
