<doctype.html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css" media="screen" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Materia Ensinada</title>
</head>    
<body>
    
<nav class="navbar navbar-expand-lg colorido" role="navigation">
    <div class="container">
        <a href="<?=site_url('public/aluno')?>"><img id="logo" src="<?=base_url();?>/images/logo.png"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="dropdown order-1">
                    <?php if(!isset($_SESSION["nome"])){  ?>
                    
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
                           <form class="form" role="form" method="post" action="<?= site_url('public/login')?>">
                                <div class="form-group">
                                    <input placeholder="Usuário" name="usuario" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group">
                                    <input id="pwd" placeholder="Password" name="senha" class="form-control form-control-sm" type="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    
                    <?php } else { ?>
                    
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"><?= $_SESSION["nome"] ?> <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">
                           <form class="form" role="form" method="post" action="<?= site_url('public/deslogar')?>">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Sair</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    
                    <?php } ?>
                    
                    
                </li>
            </ul>
        </div>
    </div>
</nav>
    
    <div id="corpo2" class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2"><h1><br><br><br>Materias Ensinadas</h1></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2"><h5><br><br><br><br><br><br><br><br><br><h2>História</h2><br>
Grécia antiga;<br>
Cultura grega;<br>
Idade média;<br>
expansão européia;<br>
Colonização das Américas;<br>
Brasil colônia;<br>
Colônias na América do norte;<br>
Governo Geral;<br>
Brasil Império;<br> 
Brasil República;<br>
Guerras Mundiais;<br>
História geral;<br>
História contemporânea.<br><br><br><br><br></h5></div>
            
            <div class="col-sm-2"><h5><br><br><br><br><br><br><br><br><br><h2>Química</h2><br>Distribuição Eletrônica;<br>Ácidos;<br>Nox.</h5></div>
        </div>
    </div>
    <br><br>
    <div id="caixa_2" class="container-fluid" >
        <div id="caixa_1" class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" id="texto_3">
                <h5>Sobre</h5>
                <br><a href="<?= site_url('public/home/op/quemsomos') ?>">Quem somos?</a>
                <br><a href="<?= site_url('public/home/op/valores') ?>">Nossos Valores</a>
                <br><a href="<?= site_url('public/home/op/ajuda') ?>">Precisando de Ajuda?</a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2" id="texto_3"></div>
            <div class="col-sm-2" id="texto_3">
                <h5>Mais</h5><br>
                <a href="<?= site_url('public/home/op/materia') ?>">Materias Ensinadas</a>
                <br><a href="<?= site_url('public/home/op/mencao') ?>">Menções Legais</a>
                <br><a href="<?= site_url('public/home/op/contato') ?>">Contato</a>
            </div>
            <div class="col-sm-1"></div><br><br>
            <div class="col-sm-1"></div><br><br>
            <div class="col-sm-2" id="texto_3">
                <button type="button" class="btn btn-outline-secondary botom_1">
                    <a href="https://www.facebook.com/Professora-Ana-117786329982874/?modal=admin_todo_tour" >Facebook</a>
                </button><br><br>
                <button type="button" class="btn btn-outline-secondary botom_1">
                    <a href="https://www.instagram.com/prof.ana549/" >Instagram</a>
                </button><br><br>
                <button type="button" class="btn btn-outline-secondary botom_1">
                    <a href="https://twitter.com/ProfAnaEnsinoP1?s=07&fbclid=IwAR2m-VOeLQWFiWx8s4RQGz1GH5WyPG5wSYBk4EeWE7hfg7vCDsGE6P_C-MQ" >Twitter</a>
                </button>
            </div>
        </div><br>
    </div>
    
</body>
</html>