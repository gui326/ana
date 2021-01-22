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
    <title>Criar Cadastro</title>

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
        <div class="col-sm-6"><br><h1 id="texto_2">Criar Conta</h1><br><br>
            <form method="post" action="<?= site_url('public/usuario/criarconta')?>" enctype="multipart/form-data">
                <h6>Primeiro Nome:</h6>
                <input type="text" name="primeiro_nome" class="form-control" placeholder="Insira o Primeiro Nome" value="<?= set_value('primeiro_nome');?>">   
                <?php if(isset($validation)) echo $validation->getError('primeiro_nome'); ?><br>

                <br><h6>Segundo Nome:</h6>
                <input type="text" name="segundo_nome" class="form-control" placeholder="Insira o Segundo Nome" value="<?= set_value('segundo_nome');?>">   
                <?php if(isset($validation)) echo $validation->getError('segundo_nome'); ?><br>

                <br><h6>Idade:</h6>
                <input type="text" name="idade" class="form-control" placeholder="Insira a Idade" value="<?= set_value('idade');?>">
                <?php if(isset($validation)) echo $validation->getError('idade'); ?><br>

                <br><h6>Email:</h6>
                <input type="text" name="email" class="form-control" placeholder="Insira o Email" value="<?= set_value('email');?>">
                <?php if(isset($validation)) echo $validation->getError('email'); ?><br>

                <br><h6>CPF:</h6>
                <input type="text" name="cpf_id" class="form-control" placeholder="Insira o CPF" value="<?= set_value('cpf_id');?>">
                <?php if(isset($validation)) echo $validation->getError('cpf_id'); ?><br>

                <br><h6>Usuário:</h6>
                <input type="text" name="usuario" class="form-control" placeholder="Insira o Usuário" value="<?= set_value('usuario');?>">
                <?php if(isset($validation)) echo $validation->getError('usuario'); ?><br>

                <br><h6>Senha:</h6>
                <input type="password" id="pwd" name="senha" class="form-control" placeholder="Insira a Senha">
                <?php if(isset($validation)) echo $validation->getError('senha'); ?><br>

                <br><h6>Confirmação da Senha:</h6>
                <input type="password" id="pwd" name="conf_senha" class="form-control" placeholder="Insira a Confirmação da Senha">
                <?php if(isset($validation)) echo $validation->getError('conf_senha'); ?><br>

                <br><h6>Insira sua Foto:</h6>
                <input type="file" name="arquivo" class="form-control-file" value="<?= set_value('arquivo');?>">

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