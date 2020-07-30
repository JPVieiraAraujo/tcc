<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Turma</h2>
    </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?= $this->Html->link(__('Listar'), ['controller'=>'turmas',
                                        'action'=>'index'],
                                        ['class'=>'btn btn-outline-info btn-sm'])
                ?>
                <?= $this->Html->link(__('Visualizar'), ['controller'=>'turmas',
                                        'action'=>'view', $turma->id],
                                        ['class'=>'btn btn-outline-primary btn-sm'])
                ?>
                <?= $this->Form->postLink(__('Apagar'), ['controller'=>'turmas',
                                        'action'=>'delete', $turma->id],
                                        ['class'=>'btn btn-outline-danger btn-sm',
                                        'confirm'=>__('Realmente deseja apagar a turma # {0}?', $turma->id)])
                ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                    <?= $this->Html->link(__('Listar'), ['controller'=>'turmas',
                                            'action'=>'index'],
                                            ['class'=>'dropdown-item']) ?>

                    <?= $this->Html->link(__('Visualizar'), ['controller'=>'turmas',
                                            'action'=>'view', $turma->id],
                                            ['class'=>'dropdown-item']) ?>

                    <?= $this->Form->postLink(__('Apagar'), ['controller'=>'turmas',
                                            'action'=>'delete', $turma->id],
                                            ['class'=>'dropdown-item',
                                            'confirm'=> __('Realmente deseja apagar a turma # {0}?', $user->id)]) ?>
                </div>
            </div>
        </div>
    </a>
</div><hr>

<?= $this->Flash->render() ?>

<?= $this->Form->create($turma) ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span>Turma</label>
                <?= 
                    $this->Form->control('nome', ['class'=>'form-control',
                                        'placeholder'=> 'Informe a Turma',
                                        'label'=>false])
                ?>
        </div>
        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span>Nº Vaga</label>
                <?= 
                    $this->Form->control('n_vaga', ['class'=>'form-control',
                                        'placeholder'=> 'Informe nº vaga',
                                        'label'=>false])
                ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label><span class="text-danger">*</span>Professor</label>
                <?= 
                    $this->Form->control('user_id', ['options'=>$users, 
                                        'class'=>'form-control',
                                        'label'=>false])
                ?>
        </div>
    </div>

    <p>
        <span class="text-danger">* </span>Campo obrigatório
    </p>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-warning']) ?>

<?= $this->Form->end() ?>
