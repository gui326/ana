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
                <li>
                    <a href="<?=site_url('public/professor/buscar')?>">Lista alunos</a>
                </li>
                <li class="active">
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
                    <form method="post" action="<?= site_url('public/professor/atualizar_prova')?>" enctype="multipart/form-data">
                        <br><br>
                        <h6>Título da Prova:</h6>
                        <input type="text" name="nome"  value="<?= $nome ?>" class="form-control" required>  
                        
                        <br><br><h6>Matéria:</h6>
                        <select name="tipo" class="form-control" id="sel1">
                            <option value="<?= $tipo ?>">Matéria <?= $tipo ?></option>
                            <option value="1">Matemática</option>
                            <option value="2">Português</option>
                            <option value="3">História</option>
                            <option value="4">Geografia</option>
                            <option value="5">Ciência</option>
                        </select>
                        
                        <?php for($i=1;$i<=5;$i++){ ?>
                        <br><br><h6><?= $i ?>º Questão:</h6>
                        <textarea class="form-control" name="questao<?= $i ?>" rows="5" id="comment"><?php if($i == 1)echo $questao1; else if($i == 2)echo $questao2;else if($i == 3)echo $questao3;else if($i == 4)echo $questao4;else if($i == 5)echo $questao5; ?></textarea>
                        
                        <h6><?= $i ?>º Letra A:</h6>
                        <input name="a<?= $i ?>" type="text"  value="<?php if($i == 1)echo $a1; else if($i == 2)echo $a2;else if($i == 3)echo $a3;else if($i == 4)echo $a4;else if($i == 5)echo $a5; ?>" class="form-control" > 
                        
                        <h6><?= $i ?>º Letra B:</h6>
                        <input name="b<?= $i ?>" type="text"  value="<?php if($i == 1)echo $b1; else if($i == 2)echo $b2;else if($i == 3)echo $b3;else if($i == 4)echo $b4;else if($i == 5)echo $b5; ?>" class="form-control" >
                        
                        <h6><?= $i ?>º Letra C:</h6>
                        <input name="c<?= $i ?>" type="text"  value="<?php if($i == 1)echo $c1; else if($i == 2)echo $c2;else if($i == 3)echo $c3;else if($i == 4)echo $c4;else if($i == 5)echo $c5; ?>" class="form-control" > 
                        
                        <h6><?= $i ?>º Letra D:</h6>
                        <input name="d<?= $i ?>" type="text"  value="<?php if($i == 1)echo $d1; else if($i == 2)echo $d2;else if($i == 3)echo $d3;else if($i == 4)echo $d4;else if($i == 5)echo $d5; ?>" class="form-control" > 
                        
                        <h6><?= $i ?>º Resposta correta:</h6>
                        <select name="r<?= $i ?>" class="form-control" id="sel1">
                            <option value="<?php if($i == 1)echo $r1; else if($i == 2)echo $r2;else if($i == 3)echo $r3;else if($i == 4)echo $r4;else if($i == 5)echo $r5; ?>">Resposta <?php if($i == 1)echo $r1; else if($i == 2)echo $r2;else if($i == 3)echo $r3;else if($i == 4)echo $r4;else if($i == 5)echo $r5; ?></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>
                        
                        <?php } ?>
                        
                        <input type="hidden" name="ex-nome" value="<?= $nome ?>">
                        <input type="hidden" name="ex-questao1" value="<?= $questao1 ?>">
                        <input type="hidden" name="ex-questao2" value="<?= $questao2 ?>">
                        <input type="hidden" name="ex-questao3" value="<?= $questao3 ?>">
                        <input type="hidden" name="ex-questao4" value="<?= $questao4 ?>">
                        <input type="hidden" name="ex-questao5" value="<?= $questao5 ?>">
                        
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