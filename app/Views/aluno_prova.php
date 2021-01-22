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
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <form method="post" action="<?= site_url('public/aluno/resposta')?>" enctype="multipart/form-data">
                                <br><h6><?= $nome ?></h6><br>
                                
                                <h6>1. <?= $questao1 ?></h6><br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" value="a" required><h6>a) <?= $a1 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" value="b"><h6>b) <?= $b1 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" value="c"><h6>c) <?= $c1 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio" value="d"><h6>d) <?= $d1 ?></h6>
                                  </label>
                                </div>
                                
                                
                                <br><br><h6>2. <?= $questao2 ?></h6><br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio2" value="a" required><h6>a) <?= $a2 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio2" value="b"><h6>b) <?= $b2 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio2" value="c"><h6>c) <?= $c2 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio2" value="d"><h6>d) <?= $d2 ?></h6>
                                  </label>
                                </div>
                                
                                
                                
                                <br><br><h6>3. <?= $questao3 ?></h6><br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio3" value="a" required><h6>a) <?= $a3 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio3" value="b"><h6>b) <?= $b3 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio3" value="c"><h6>c) <?= $c3 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio3" value="d"><h6>d) <?= $d3 ?></h6>
                                  </label>
                                </div>
                                
                                
                                <br><br><h6>4. <?= $questao4 ?></h6><br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio4" value="a" required><h6>a) <?= $a4 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio4" value="b"><h6>b) <?= $b4 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio4" value="c"><h6>c) <?= $c4 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio4" value="d"><h6>d) <?= $d4 ?></h6>
                                  </label>
                                </div>
                                
                                
                                <br><Br><h6>5. <?= $questao5 ?></h6><br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio5" value="a" required><h6>a) <?= $a5 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio5" value="b"><h6>b) <?= $b5 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio5" value="c"><h6>c) <?= $c5 ?></h6>
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio5" value="d"><h6>d) <?= $d5 ?></h6>
                                  </label>
                                </div>
                                
                                <input type="hidden" name="nome" value="<?= $nome ?>">
                                <input type="hidden" name="questao1" value="<?= $questao1 ?>">
                                <input type="hidden" name="questao2" value="<?= $questao2 ?>">
                                <input type="hidden" name="questao3" value="<?= $questao3 ?>">
                                <input type="hidden" name="questao4" value="<?= $questao4 ?>">
                                <input type="hidden" name="questao5" value="<?= $questao5 ?>">
                                
                                <input type="hidden" name="tipo" value="<?= $tipo ?>">
                                
                                

                                <br><br><button type="submit" class="btn btn-primary form-control">Enviar</button>
                            </form>
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