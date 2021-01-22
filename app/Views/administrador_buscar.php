<doctype.html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css" media="screen" />
            
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
    <title>Administrador</title>
</head>    
<body>
            
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="<?=site_url('public/administrador')?>"><img id="logo" src="<?=base_url();?>/images/logo.png"><br><br></a>
            </div>

            <ul class="list-unstyled components">
                
                <li <?php if($tipo == 'aluno'){ ?> class="active" <?php }?>>
                            <a href="<?=site_url('public/administrador/buscar/aluno')?>">Lista alunos</a>
                </li>
                <li <?php if($tipo == 'professor'){ ?> class="active" <?php }?>>
                            <a href="<?=site_url('public/administrador/buscar/professor')?>">Lista professores</a>
                </li>
                <li <?php if($tipo == 'administrador'){ ?> class="active" <?php }?>>
                            <a href="<?=site_url('public/administrador/buscar/administrador')?>">Lista administradores</a>
                </li>
                <li <?php if($tipo == 4){ ?> class="active" <?php }?>>
                            <a href="<?=site_url('public/grafico')?>">Gráfico</a>
                </li>
                <li>
                    <a href="<?=site_url('public/deslogar')?>">Sair</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="article">Administrador <?=$_SESSION["nome"] ?></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
            </nav>

            <div id="corpo" class="container-fluid">
                <div class="row">
                    <div class="row">
                    <div class="col-sm-12">
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Primeiro Nome</th>
                            <th>Segundo Nome</th>
                            <th>Idade</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Usuário</th>
                            <th>Senha</th>
                            <th>Arquivo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    <?php foreach($usuarios as $usuario): ?>
                        <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['primeiro_nome'] ?></td>
                        <td><?php echo $usuario['segundo_nome'] ?></td>
                        <td><?php echo $usuario['idade'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['cpf_id'] ?></td>
                        <td><?php echo $usuario['usuario'] ?></td>
                        <td><?php echo $usuario['senha'] ?></td>
                        <td><?php echo $usuario['arquivo'] ?></td>
                        <td><?= anchor("public/administrador/deletar/$usuario[id]", 'Deletar') ?></td>
                        <td><?= anchor("public/administrador/mostrar/$usuario[id]", 'Atualizar') ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
        

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            
            
        

            
</body>
</html>