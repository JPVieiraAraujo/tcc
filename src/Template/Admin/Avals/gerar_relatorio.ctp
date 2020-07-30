<div class="card border-success mb-3" style="max-width: auto;">
<div class="card-header">
        <div class="row"> 
            <div class="col-12 font-weight-bolder text-center border border-success">
                <h3>CENTRO DE EDUCAÇÃO INFANTIL DE SOROLÂNDIA</h3>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class=" col-12 text-center border-bottom">
                    <h5>Relatório da Educação Infantil</h5>
                </div>
            </div>

            <div class="row">              
                <div class="col-9 font-weight-bolder">                    
                    <div class="row h-50">
                        <?php echo '<h5>Aluno:&nbsp;&nbsp;&nbsp;</h5>' . h($aval->aluno->nome) ?>
                    </div>
                    <div class="row">
                    <?php echo '<h5>Responsável:&nbsp;&nbsp;&nbsp;</h5>' . h($aval->aluno->nome_resp) ?>
                    </div>
                </div>
                <div class="col-3 text-center">
                    <div class="border border-success">
                        <h6>1º Semestre/20220</h6>                    
                        <h6>Data Documento</h6>
                        <?= h($aval->created->format('d/m/y ')) ?>
                    </div>
                </div>
            </div>

        </div>        
    </div>

    <div class="card-body text-success">
        
        <?php if(h($aval->aluno->genero) === 'M'){
            echo '<p>Neste ano de 2019, o aluno, ' . h($aval->aluno->nome) . ', desenvolveu algumas atividades e convivência,
        onde foi possível extrair algumas informações do seu desenvolvimento afetivo, social, motor e cognitivo. </p>';
        }else {
            echo '<p>Neste ano de 2019, a aluna, ' . h($aval->aluno->nome) . ', desenvolveu algumas atividades e convivência,
        onde foi possível extrair algumas informações do seu desenvolvimento afetivo, social, motor e cognitivo. </p>';
        }
        ?>
        <div class="card border-success mb-3" style="max-width: auto;">
            <div class="card-body text-success">
                <h5 class="card-title text-center">Área Afetiva</h5>
                <p class="card-text text-justify">
                    <?php
                        echo h($aval->areas_afetiva->texto);
                    ?>
                </p>
            </div>
        </div>
        
        <div class="card border-success mb-3" style="max-width: auto;">
            <div class="card-body text-success">
                <h5 class="card-title text-center">Área Cognitiva</h5>
                <p class="card-text text-justify">
                    <?php
                        echo h($aval->areas_cognitiva->texto);
                    ?>
                </p>
            </div>
        </div>
      
        <div class="card border-success mb-3" style="max-width: auto;">
            <div class="card-body text-success">
                <h5 class="card-title text-center">Área Motora</h5>
                <p class="card-text text-justify">
                    <?php
                        echo h($aval->areas_motora->texto);
                    ?>
                </p>
            </div>
        </div>
        
        <div class="card border-success mb-3" style="max-width: auto;">
            <div class="card-body text-success">
                <h5 class="card-title text-center">Área Social</h5>
                <p class="card-text text-justify">
                    <?php
                        echo h($aval->areas_social->texto);
                    ?>
                </p>
            </div>
        </div>

    </div>    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-6">
            Ass:. Direção: _____________________________
            </div>
        <div class="col col-lg-6 text-right">
            Ass:. Responsável: _____________________________
        </div>
    </div>

</div>

