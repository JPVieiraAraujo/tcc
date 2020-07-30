<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Aluno</h2>
    </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?= $this->Html->link(__('Listar'), ['controller'=>'alunos',
                                        'action'=>'index'],
                                        ['class'=>'btn btn-outline-info btn-sm'])
                ?>
                <?= $this->Html->link(__('Visualizar'), ['controller'=>'alunos',
                                        'action'=>'view', $aluno->id],
                                        ['class'=>'btn btn-outline-primary btn-sm'])
                ?>
                <?= $this->Form->postLink(__('Apagar'), ['controller'=>'alunos',
                                        'action'=>'delete', $aluno->id],
                                        ['class'=>'btn btn-outline-danger btn-sm',
                                        'confirm'=>__('Realmente deseja apagar o aluno # {0}?', $aluno->id)])
                ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">                                    
                    <?= $this->Html->link(__('Listar'), ['controller'=>'alunos',
                                            'action'=>'index'],
                                            ['class'=>'dropdown-item']) ?>

                    <?= $this->Html->link(__('Visualizar'), ['controller'=>'alunos',
                                            'action'=>'view', $aluno->id],
                                            ['class'=>'dropdown-item']) ?>

                    <?= $this->Form->postLink(__('Apagar'), ['controller'=>'alunos',
                                            'action'=>'delete', $aluno->id],
                                            ['class'=>'dropdown-item',
                                            'confirm'=> __('Realmente deseja apagar o usuário # {0}?', $aluno->id)]) ?>
                </div>
            </div>
        </div>
    </a>
</div><hr>

<?= $this->Flash->render() ?>

<?= $this->Form->create($aluno) ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span>Nome</label>
                <?= 
                    $this->Form->control('nome', ['class'=>'form-control',
                                        'placeholder'=> 'Nome Completo do Aluno',
                                        'label'=>false])
                ?>
        </div>
        <div class="form-group col-md-3">
            <label><span class="text-danger">*</span>Data Nascimento</label>
                <?= 
                    $this->Form->control('dt_nascimento', ['class'=>'form-control',
                                        'label'=>false])
                ?>
        </div>
        <div class="form-group col-md-3">
            <label><span class="text-danger">*</span>Gênero</label>
                <?= 
                    $this->Form->input('genero', array(
                        'options' => array(
                            'M' => 'Masculino',
                            'F' => 'Feminino'
                        ),'empty' => 'Selecione o sexo'));

                ?>
        </div>      
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label><span class="text-danger">*</span>Nome Responsável</label>
                <?= 
                    $this->Form->control('nome_resp', ['class'=>'form-control',
                                        'placeholder'=> 'Nome do Responsável',
                                        'label'=>false])
                ?>
        </div>  
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label><span class="text-danger">*</span>Turma</label>
                <?= 
                    $this->Form->control('turma_id', ['options'=>$turmas,
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

