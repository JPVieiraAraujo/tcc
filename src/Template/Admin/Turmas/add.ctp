<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Turma</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(_('Listar'), ['controller'=>'turmas',
                                    'action'=>'index'],
                                    ['class'=>'btn btn-outline-info btn-sm'])
            ?>
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
                                        'placeholder'=> 'Nome da Turma',
                                        'label'=>false])
                ?>
        </div>
        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span>Vaga</label>
                <?= 
                    $this->Form->control('n_vaga', ['class'=>'form-control',
                                        'placeholder'=> 'Informe a quantidade vaga',
                                        'label'=>false])
                ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label><span class="text-danger">*</span>Professor</label>
                <?= 
                    $this->Form->control('user_id', ['options' => $users,
                                        'class'=>'form-control',
                                         'label'=>false])
                ?>
        </div>
    </div>

    <p>
        <span class="text-danger">* </span>Campo obrigatório
    </p>
    <?= $this->Form->button(__('Cadastrar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>
