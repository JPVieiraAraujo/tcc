<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Aluno</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(_('Listar'), ['controller'=>'alunos',
                                    'action'=>'index'],
                                    ['class'=>'btn btn-outline-info btn-sm'])
            ?>
        </div>
    </a>
</div><hr>

<?= $this->Flash->render() ?>

<?= $this->Form->create($aluno) ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label><span class="text-danger">*</span>Nome Aluno</label>
                <?= 
                    $this->Form->control('nome', ['class'=>'form-control',
                                        'placeholder'=> 'Nome Completo',
                                        'label'=>false])
                ?>
        </div>
        <div class="form-group col-md-3">
            <label><span class="text-danger">*</span>Data Nascimento</label>
                <?= 
                    $this->Form->control('dt_nascimento', ['class'=>'form-control',
                                        'placeholder'=> 'Informe seu e-mail',
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
        <span class="text-danger">*</span>Campo obrigatório
    </p>
    <?= $this->Form->button(__('Cadastrar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>
