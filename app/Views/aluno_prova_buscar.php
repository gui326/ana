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
        
    <title>Aluno</title>
</head>    
<body>
            
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="<?=site_url('public/aluno')?>"><img id="logo" src="<?=base_url();?>/images/logo.png"><br><br></a>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Matérias</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?=site_url('public/materia/matematica/equacao')?>">Matématica</a>
                        </li>
                        <li >
                            <a href="<?=site_url('public/materia/portugues/interpretacao')?>">Português</a>
                        </li>
                        <li >
                            <a href="<?=site_url('public/materia/historia/descobrasil')?>">História</a>
                        </li>
                        <li>
                            <a href="<?=site_url('public/materia/geografia/relevos')?>">Geografia</a>
                        </li>
                        <li>
                            <a href="<?=site_url('public/materia/ciencia/ecologia')?>">Ciência</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Provas</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li <?php if($tipo == 1) { ?> class="active" <?php } ?>>
                            <a href="<?=site_url('public/aluno/prova/matematica')?>">Matématica</a>
                        </li>
                        <li <?php if($tipo == 2) { ?> class="active" <?php } ?>>
                            <a href="<?=site_url('public/aluno/prova/portugues')?>">Português</a>
                        </li>
                        <li <?php if($tipo == 3) { ?> class="active" <?php } ?>>
                            <a href="<?=site_url('public/aluno/prova/historia')?>">História</a>
                        </li>
                        <li <?php if($tipo == 4) { ?> class="active" <?php } ?>>
                            <a href="<?=site_url('public/aluno/prova/geografia')?>">Geografia</a>
                        </li>
                        <li <?php if($tipo == 5) { ?> class="active" <?php } ?>>
                            <a href="<?=site_url('public/aluno/prova/ciencia')?>">Ciências</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?=site_url('public/deslogar')?>">Sair</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="article">Aluno <?=$_SESSION["nome"] ?></a>
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
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>

            <div id="corpo" class="container-fluid">
                <div class="row">
                    <div class="col-sm-12"><table class="table table-hover">
                        <tr>
                            <th>Título da Prova</th>
                        </tr>
                    <?php foreach($provas as $prova): ?>
                        <tr>
                        <td><a href="<?= site_url('public/aluno/questoes/' . $prova['ID']) ?>"><?php echo $prova['nome'] ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </table></div>
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