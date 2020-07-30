<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Avaliação</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(_('Listar'), ['controller'=>'Avals',
                                    'action'=>'index'],
                                    ['class'=>'btn btn-outline-info btn-sm'])
            ?>
        </div>
    </a>
</div><hr>

<?= $this->Flash->render() ?>

<?= $this->Form->create($aval) ?>
    
    <div class="form-row">
        <div class="form-group col-md-12">
            <label><span class="text-danger">*</span>Aluno</label>
                <?= 
                    $this->Form->control('aluno_id', ['options'=>$alunos,
                                        'class'=>'form-control',
                                        'label'=>false])
                ?>
        </div>    
    </div>

    <div class="card text-white bg-info mb-6">
        <div class="card-header text-center"><h4>Área Motora</h4></div>
        <div class="card-body">
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Autonomia</label>
                    <?= 
                        $this->Form->input('motora1', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>

            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Movimento de Pinça</label>
                <?= 
                    $this->Form->input('motora2', array(
                        'options' => array(
                            '1' => 'Abaixo do Esperado',
                            '2' => 'Atinge o Esperado',
                            '3' => 'Acima do Esperado'
                        ),'empty' => 'Informe o nível da avaliação',
                          'class'=>'form-control',
                          'label'=>false));

                ?>
            </div>
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Movimentação no Parque</label>
                    <?= 
                        $this->Form->input('motora3', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>
        </div>
    </div><hr>

    <div class="card text-white bg-info mb-6">
        <div class="card-header text-center"><h4>Área Afetiva</h4></div>
        <div class="card-body">
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Carinhoso com os amigos?</label>
                    <?= 
                        $this->Form->input('afetiva1', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>

            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Sensível às dificuldades do outro?</label>
                <?= 
                    $this->Form->input('afetiva2', array(
                        'options' => array(
                            '1' => 'Abaixo do Esperado',
                            '2' => 'Atinge o Esperado',
                            '3' => 'Acima do Esperado'
                        ),'empty' => 'Informe o nível da avaliação',
                          'class'=>'form-control',
                          'label'=>false));

                ?>
            </div>
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Gosta de afagos?</label>
                    <?= 
                        $this->Form->input('afetiva3', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>
        </div>
    </div><hr>

    <div class="card text-white bg-info mb-6">
        <div class="card-header text-center"><h4>Área Social</h4></div>
        <div class="card-body">
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Interage com os amigos?</label>
                    <?= 
                        $this->Form->input('social1', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>

            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Egocêntrico?</label>
                <?= 
                    $this->Form->input('social2', array(
                        'options' => array(
                            '1' => 'Abaixo do Esperado',
                            '2' => 'Atinge o Esperado',
                            '3' => 'Acima do Esperado'
                        ),'empty' => 'Informe o nível da avaliação',
                          'class'=>'form-control',
                          'label'=>false));

                ?>
            </div>
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Linguagem Oral</label>
                    <?= 
                        $this->Form->input('social3', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>
        </div>
    </div><hr>

    <div class="card text-white bg-info mb-6">
        <div class="card-header text-center"><h4>Área Cognitiva</h4></div>
        <div class="card-body">
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Reconhece seu nome?</label>
                    <?= 
                        $this->Form->input('cognitiva1', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>

            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Reconhece cores e formas?</label>
                <?= 
                    $this->Form->input('cognitiva2', array(
                        'options' => array(
                            '1' => 'Abaixo do Esperado',
                            '2' => 'Atinge o Esperado',
                            '3' => 'Acima do Esperado'
                        ),'empty' => 'Informe o nível da avaliação',
                          'class'=>'form-control',
                          'label'=>false));

                ?>
            </div>
            
            <div class="form-group col-md-12">
                <label><span class="text-danger">*</span>Interpreta as atividades?</label>
                    <?= 
                        $this->Form->input('cognitiva3', array(
                            'options' => array(
                                '1' => 'Abaixo do Esperado',
                                '2' => 'Atinge o Esperado',
                                '3' => 'Acima do Esperado'
                            ),'empty' => 'Informe o nível da avaliação',
                            'class'=>'form-control',
                            'label'=>false));

                    ?>
            </div>
        </div>
    </div><hr>   
    
    <p>
        <span class="text-danger">*</span>Campo obrigatório
    </p>
    <?= $this->Form->button(__('Avaliar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>
