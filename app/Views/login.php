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
    <title>Login</title>

</head>    
<body>
        
    
<nav class="navbar navbar-expand-lg navbar-dark colorido" role="navigation">
    <div class="container">
        <a href="<?=site_url('public')?>"><img id="logo" src="<?=base_url();?>/images/logo.png"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
    </div>
</nav>
    
<div id="corpo2" class="container-fluid" >
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2"></div>
        <div class="col-sm-6"><br><h1 id="texto_2">Login</h1><br><br>
            
            <form method="post" action="<?= site_url('public/login')?>">
                <h6>Usuário:</h6>
                
                    <input type="text" name="usuario" id="uname" class="form-control" placeholder="Insira usuário" value="<?php if(isset($pass)) echo set_value('usuario')?>" required><br>  
                <?php
                if(!isset($usuario))
                    echo "<div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Usuário correto!</strong>
                    </div>";
                else
                    echo "<div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Usuário incorreto!</strong>
                    </div>";
                ?>
                    
                
                
                
                
                <h6>Senha:</h6>
                
                
                <input type="password" id="pwd" name="senha" class="form-control" placeholder="Insira senha" required>

                <br>
                
                <?php
                if(!isset($pass))
                    echo "<div class='alert alert-success alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Senha correta!</strong>
                    </div>";
                else
                    echo "<div class='alert alert-danger alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Senha incorreta!</strong>
                    </div>";
                ?>
                
                
               
                
                
                <br><br><button type="submit" class="btn btn-primary form-control">Enviar</button>
            </form>
                                                               

        </div>
        <div class="col-sm-3"></div>
            
            
    </div><br><br>
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