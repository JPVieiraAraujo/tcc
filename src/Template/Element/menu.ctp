<nav class="sidebar">
    <ul class="list-unstyled">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-tachometer-alt"></i> Home',
                [
                    'controller'=>'welcome',
                    'action'=>'index'
                ],
                [
                    'escape'=>false
                ]
                );            
            ?>
        <li>

        <li>
            <?= $this->Html->link(
                '<i class="fa fa-graduation-cap" aria-hidden="true"></i> Turmas',
                [
                    'controller'=>'turmas',
                    'action'=>'index'
                ],
                [
                    'escape'=>false
                ]
                );            
            ?>
        <li>

        <li>
            <?= $this->Html->link(
                '<i class="fa fa-child" aria-hidden="true"></i> Alunos',
                [
                    'controller'=>'alunos',
                    'action'=>'index'
                ],
                [
                    'escape'=>false
                ]
                );            
            ?>
        <li>

        <li>
            <?= $this->Html->link(
                '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Avaliação',
                [
                    'controller'=>'Avals',
                    'action'=>'index'
                ],
                [
                    'escape'=>false
                ]
                );            
            ?>
        <li>

        <li>
            <?= $this->Html->link(
                '<i class="fas fa-sign-out-alt"></i> Sair',
                [
                    'controller'=>'users',
                    'action'=>'logout'
                ],
                [
                    'escape'=>false
                ]
                );            
            ?>
        <li>
            
    </ul>
</nav>

    