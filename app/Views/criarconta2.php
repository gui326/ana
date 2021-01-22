<doctype.html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/pagamento.css" media="screen" />
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Criar Cadastro</title>
    
    <script>
    function init() {
   return function () {
      var a = sessionStorage.getItem("teste");
       if(a == 1){
           document.getElementById('pagamento').style.display = 'block';
           document.getElementById('control_02').checked = true;
           window.location.href='#foo';
       }
       else{
           document.getElementById('pagamento').style.display = 'none';
       }
   };
    }

        window.onload = init();
    
    
    
    
    </script>

    <script>
    function Mudarestado(el,ali,ala) {
        sessionStorage.setItem("teste", "1");
        
        var display = document.getElementById(el).style.display;
        var teste = document.getElementById(ali).checked;
        var teste2 = document.getElementById(ala).checked;
        
        if(teste == true){
            document.getElementById(el).style.display = 'block';
            setTimeout(function(){ window.location.href= '#foo';}, 400);
        }
        else if(teste == false){
            document.getElementById(el).style.display = 'none';
            if(teste2 == true){
               window.location.assign('criarconta3'); 
            }
            
        }
        
    }
    </script>
    
    
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
        <div class="col-sm-6">
            <form method="post" action="<?= site_url('public/usuario/criarconta2')?>">
                
                <br><h1 id="texto_2">Tipo de Conta</h1><br><br>
                <section>
                <div>
                  <input type="radio" id="control_01" name="produto" value="1">
                  <label for="control_01">
                    <br><h2>Free</h2>
                    <br><p>Grátis <br> Apenas Apostilas</p><br>
                  </label>
                </div>
                <div>
                  <input type="radio" id="control_02" name="produto" value="2">
                  <label for="control_02">
                   <br><h2>Premium</h2>
                    <br><p>R$10/mês <br> Acesso à conteúdos exclusivos</p><br>
                  </label>
                </div>
                </section>
                <br>
                <button type="button" onclick="Mudarestado('pagamento','control_02','control_01')" class="btn btn-primary form-control">Selecionar</button>
                
                   
                    
                <div id="pagamento">  
                    
                <br><br><h2 id="foo" >Forma de Pagamento</h2><br>
                <h6>Número do Cartão:</h6>
                <input type="text" name="card_number" class="form-control" value="<?= set_value('card_number');?>"/>
                <?php if(isset($validation)) echo $validation->getError('card_number'); ?><br>
                
                <br><h6>Nome do Titular:</h6>
                <input type="text" name="card_name" class="form-control" value="<?= set_value('card_name');?>"/>
                <?php if(isset($validation)) echo $validation->getError('card_name'); ?><br>
                
                <br><h6>Data de Validade:</h6>
                <input type="date" name="card_date" class="form-control" value="<?= set_value('card_date');?>"/>
                <?php if(isset($validation)) echo $validation->getError('card_date'); ?><br>
                
                <br><h6>CVV:</h6>
                <input type="text" name="card_cvv" class="form-control" value="<?= set_value('card_cvv');?>"/>
                <?php if(isset($validation)) echo $validation->getError('card_cvv'); ?><br>
                
                <input type="hidden" name="cpf" value="<?= $cpf_id ?>">  
                    
                <br><br><button class="btn btn-primary form-control">Enviar</button>
                    
                </div>  
                
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