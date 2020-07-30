<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Aluno</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['controller'=>'alunos',
                                    'action'=>'index'],
                                    ['class'=>'btn btn-outline-info btn-sm']) ?>

            <?= $this->Html->link(__('Editar'), ['controller'=>'alunos',
                                    'action'=>'edit', $aluno->id],
                                    ['class'=>'btn btn-outline-warning btn-sm']) ?>

            <?= $this->Form->postLink(__('Apagar'), ['controller'=>'alunos',
                                    'action'=>'delete', $aluno->id],
                                    ['class'=>'btn btn-outline-danger btn-sm',
                                    'confirm'=> __('Realmente deseja apagar o aluno # {0}?', $aluno->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                <?= $this->Html->link(__('Listar'), ['controller'=>'alunos',
                                        'action'=>'index'],
                                        ['class'=>'dropdown-item']) ?>

                <?= $this->Html->link(__('Editar'), ['controller'=>'alunos',
                                        'action'=>'edit', $aluno->id],
                                        ['class'=>'dropdown-item']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller'=>'alunos',
                                        'action'=>'delete', $aluno->id],
                                        ['class'=>'dropdown-item',
                                        'confirm'=> __('Realmente deseja apagar o aluno # {0}?', $aluno->id)]) ?>
            </div>
        </div>
    </div>
</div><hr>

<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($aluno->id) ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($aluno->nome) ?></dd>

    <dt class="col-sm-3">Data Nascimento</dt>
    <dd class="col-sm-9"><?= h($aluno->dt_nascimento) ?></dd>

    <dt class="col-sm-3 text-truncate">Gênero</dt>
    <dd class="col-sm-9"><?= h($aluno->genero) ?></dd>

    <dt class="col-sm-3 text-truncate">Nome Responsável</dt>
    <dd class="col-sm-9"><?= h($aluno->nome_resp) ?></dd>

    <dt class="col-sm-3 text-truncate">Cadastro</dt>
    <dd class="col-sm-9"><?= h($aluno->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Alteração</dt>
    <dd class="col-sm-9"><?= h($aluno->modified) ?></dd>

</dl>
