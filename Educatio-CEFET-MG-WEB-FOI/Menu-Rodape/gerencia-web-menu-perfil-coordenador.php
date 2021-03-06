
<!DOCTYPE html>
<html>
<head>	
    <title>Login - Educatio - CEFET-MG</title>
    <meta charset="utf-8">
</head>
<body>
	<nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="150">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand"><img class="logo" src="../../Estaticos/Logo/Educatio.png"></a>
            
        <div id="menu" class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav mr-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Campi</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarCampus">Adicionar campus</a>                       
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?removerCampus">Remover campus</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=alterarCampus">Alterar campus</a>
                    </ul>
                </div>          
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Deptos</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarDepartamento">Adicionar departamento</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=removerDepartamento">Remover departamento</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=alterarDepartamento">Alterar departamentos</a>
                    </ul>
                </div>  
                <li class="nav-item">
                    <a class="nav-link" href= "gerencia-web-interface-coordenador.php?acao=professores"><i class="nc-icon nc-book-bookmark"></i>Professores</a>
                </li> 
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Professores</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarProfessor">Adicionar professor</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=adicionarProfessor">Remover professor</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=adicionarProfessor">Vizualizar professores</a>
                    </ul>
                </div>  -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Cursos</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarCurso">Adicionar curso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=removerCurso">Remover curso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=alterarCurso">Alterar cursos</a>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Turmas</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarTurma">Adicionar turma</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=removerTurma">Remover turma</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=alterarTurma">Alterar turma</a>
                    </ul>
                </div> 
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Disciplinas</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarDisciplina">Adicionar disciplina</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=removerDisciplina">Remover disciplina</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=editarDisciplina">Editar disciplinas</a>
                    </ul>
                </div> 
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-book-bookmark"></i>Alunos</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=adicionarAluno">Adicionar aluno</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=deletarAluno">Remover aluno</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=alterarAluno">Alterar alunos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=transferirAluno">Transferencia</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=atualizarAnoAlunos">Atualizar ano dos alunos</a>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-icon nc-sound-wave"></i>Relatorios</a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=acessarNotasAlunos">Acessar notas de alunos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=acessarHistoricoAlunos">Acessar historicos de alunos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href= "gerencia-web-interface-coordenador.php?acao=acessarProfessores">Acessar professores</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=acessarConteudos">Acessar conteudos de disciplinas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gerencia-web-interface-coordenador.php?acao=integridadeSistema">Verificar a integridade do sistema</a>
                    </ul>
                </div>
            </ul>
            <ul class="nav navbar-nav">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" role="button" aria-haspopup="true" aria-expanded="false">

                    <?php 

                        if($usuario['foto'] == null){
                          echo '<img class="profile" src="../../Estaticos/imagens/perfil.png"/>';

                        } else {
                          echo '<img class="profile" src="data:image/jpeg;base64,'.base64_encode( $usuario['foto'] ).'"/>';
                        }
                    ?> 

                    <?php echo $usuario['nome'];?> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href= "../Login/gerencia-web-login.html" onclick = "fazerLogout()">Sair</a>
                    </ul>
                </div> 
            </ul>
        </div>
    </nav>    
</body>
</html>