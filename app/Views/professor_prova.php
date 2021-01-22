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
                <li>
                    <a href="<?=site_url('public/professor/buscar_prova')?>">Lista provas</a>
                </li>
                <li>
                    <a href="<?=site_url('public/Gerarpdf')?>">Relatório</a>
                </li>
                <li class="active">
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
                    <form method="post" action="<?= site_url('public/prova/inserir')?>" enctype="multipart/form-data">
                        <br><br>
                        <h6>Título da Prova:</h6>
                        <input type="text" name="nome"  class="form-control" required>  
                        
                        <br><br><h6>Matéria:</h6>
                        <select name="tipo" class="form-control" id="sel1">
                            <option></option>
                            <option value="1">Matemática</option>
                            <option value="2">Português</option>
                            <option value="3">História</option>
                            <option value="4">Geografia</option>
                            <option value="5">Ciência</option>
                        </select>
                        
                        <br><br><h6>Primeira Questão:</h6>
                        <textarea class="form-control" name="questao1" rows="5" id="comment"></textarea>
                        
                        <h6>1º Letra A:</h6>
                        <input name="a1" type="text" class="form-control" > 
                        
                        <h6>1º Letra B:</h6>
                        <input name="b1" type="text" class="form-control" >
                        
                        <h6>1º Letra C:</h6>
                        <input name="c1" type="text" class="form-control" > 
                        
                        <h6>1º Letra D:</h6>
                        <input name="d1" type="text" class="form-control" > 
                        
                        <h6>1º Resposta correta:</h6>
                        <select name="r1" class="form-control" id="sel1">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>

                        <br><br><h6>Segunda Questão:</h6>
                        <textarea class="form-control" name="questao2" rows="5" id="comment"></textarea> 
                        
                        <h6>2º Letra A:</h6>
                        <input name="a2" type="text" class="form-control" > 
                        
                        <h6>2º Letra B:</h6>
                        <input name="b2" type="text" class="form-control" >
                        
                        <h6>2º Letra C:</h6>
                        <input name="c2" type="text" class="form-control" > 
                        
                        <h6>2º Letra D:</h6>
                        <input name="d2" type="text" class="form-control" > 
                        
                        <h6>2º Resposta correta:</h6>
                        <select name="r2" class="form-control" id="sel1">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>
                        
                        <br><br><h6>Terceira Questão:</h6>
                        <textarea class="form-control" name="questao3" rows="5" id="comment"></textarea> 
                        
                        <h6>3º Letra A:</h6>
                        <input name="a3" type="text" class="form-control" > 
                        
                        <h6>3º Letra B:</h6>
                        <input name="b3" type="text" class="form-control" >
                        
                        <h6>3º Letra C:</h6>
                        <input name="c3" type="text" class="form-control" > 
                        
                        <h6>3º Letra D:</h6>
                        <input name="d3" type="text" class="form-control" > 
                        
                        <h6>3º Resposta correta:</h6>
                        <select name="r3" class="form-control" id="sel1">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>
                        
                        <br><br><h6>Quarta Questão:</h6>
                        <textarea class="form-control" name="questao4" rows="5" id="comment"></textarea>  
                        
                        <h6>4º Letra A:</h6>
                        <input name="a4" type="text" class="form-control" > 
                        
                        <h6>4º Letra B:</h6>
                        <input name="b4" type="text" class="form-control" >
                        
                        <h6>4º Letra C:</h6>
                        <input name="c4" type="text" class="form-control" > 
                        
                        <h6>4º Letra D:</h6>
                        <input name="d4" type="text" class="form-control" > 
                        
                        <h6>4º Resposta correta:</h6>
                        <select name="r4" class="form-control" id="sel1">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>
                        
                        <br><br><h6>Quinta Questão:</h6>
                        <textarea class="form-control" name="questao5" rows="5" id="comment"></textarea> 
                        
                        <h6>5º Letra A:</h6>
                        <input name="a5" type="text" class="form-control" > 
                        
                        <h6>5º Letra B:</h6>
                        <input name="b5" type="text" class="form-control" >
                        
                        <h6>5º Letra C:</h6>
                        <input name="c5" type="text" class="form-control" > 
                        
                        <h6>5º Letra D:</h6>
                        <input name="d5" type="text" class="form-control" > 
                        
                        <h6>5º Resposta correta:</h6>
                        <select name="r5" class="form-control" id="sel1">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>
                        

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