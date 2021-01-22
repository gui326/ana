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
        
    <title>Professor</title>
</head>    
<body>
            
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="<?=site_url('public/professor')?>"><img id="logo" src="<?=base_url();?>/images/logo.png"><br><br></a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="<?=site_url('public/professor/buscar')?>">Lista alunos</a>
                </li>
                <li>
                    <a href="<?=site_url('public/professor/buscar_prova')?>">Lista provas</a>
                </li>
                <li>
                    <a href="<?=site_url('public/Gerarpdf')?>">Relatório</a>
                </li>
                <li>
                    <a href="<?=site_url('public/prova')?>">Montar Prova</a>
                </li>
                <li>
                    <a href="<?=site_url('public/deslogar')?>">Sair</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="article">Professor(a) <?=$_SESSION["nome"] ?></a>
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
                    <div class="col-sm-12">
                    <form method="post" action="<?= site_url('public/professor/atualizar')?>" enctype="multipart/form-data">
                        <h6>ID:</h6>
                        <input type="text" class="form-control" placeholder="Insira o Primeiro Nome" value="<?= $id?>" disabled>  
                        
                        
                        <br><h6>Primeiro Nome:</h6>
                        <input type="text" name="primeiro_nome" class="form-control" placeholder="Insira o Primeiro Nome" value="<?= $primeiro_nome?>">   

                        <br><h6>Segundo Nome:</h6>
                        <input type="text" name="segundo_nome" class="form-control" placeholder="Insira o Segundo Nome" value="<?= $segundo_nome;?>">   

                        <br><h6>Idade:</h6>
                        <input type="text" name="idade" class="form-control" placeholder="Insira a Idade" value="<?= $idade;?>">

                        <br><h6>Email:</h6>
                        <input type="text" name="email" class="form-control" placeholder="Insira o Email" value="<?= $email;?>">
                        
                        <br><h6>CPF:</h6>
                        <input type="text" class="form-control" placeholder="Insira o CPF" value="<?= $cpf;?>" disabled>

                        <br><h6>Usuário:</h6>
                        <input type="text" name="usuario" class="form-control" placeholder="Insira a Senha" value="<?= $usuario ?>">
                        
                        <input type="hidden" name="id" value="<?= $id ?>">
                        
                        <input type="hidden" name="cpf" value="<?= $cpf ?>">

                        <br><br><button type="submit" class="btn btn-primary form-control">Enviar</button>
                    </form>
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