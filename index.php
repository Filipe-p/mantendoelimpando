
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=  +Mono:400,700" rel="stylesheet">
  <!-- Icons -->
  <script src="https://use.fontawesome.com/c719d5033d.js"></script>
  <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="script.js"></script>
  <title>Mantendo e Limpando</title>
</head>
<body>
  <div class="mantendo-limpando-navbar mantendo-limpando-navbar-fixed">
    <!-- Logo -->
    <a href="/" class="mantendo-limpando-brand">
      <img src="resources/mantendo_limpando_logo_rectangle.jpg" />
    </a>

    <!-- Right Navigation -->
    <div class="mantendo-limpando-right hidden-xs hidden-sm">
      <!-- Text link -->
      <a href="#início" class="mantendo-limpando-item mantendo-limpando-link">Início</a>
      <!-- Text link -->
      <a href="#serviços" class="mantendo-limpando-item mantendo-limpando-link">Serviços</a>
      <!-- Text link -->
      <a href="#contacts" class="mantendo-limpando-item mantendo-limpando-link">Contactos</a>
      <!-- Button (call-to-action) -->
      <a href="tel:+351966513717" class="mantendo-limpando-item mantendo-limpando-button"> <i class="fa fa-phone" aria-hidden="true" style = "font-size: 100% "></i> Orçamento Grátis</a>
    </div>

    <!-- Dropdown appearing on mobile only -->
    <div class="mantendo-limpando-item hidden-md hidden-lg">
      <div class="dropdown">
        <i class="fa fa-bars dropdown-toggle" data-toggle="dropdown"></i>
        <ul class="dropdown-menu dropdown-menu-right mantendo-limpando-dropdown-menu">
          <li><a href="#início">Início</a></li>
          <li><a href="#serviços">Serviços</a></li>
          <li><a href="#contacts">Contactos</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div id="início" class="banner" style="background-image: linear-gradient(-225deg, rgba(85,87,83, 0.1) 55%, rgba(255,255,255,0) 0%), url('resources/tool_belt_guy.jpg');">
    <div class="banner-content ">
      <div class="slightly-padded" >
        <h2 >Ligue Agora</h2>
        <h2 style="color: #f29200 " >(+351) 966 513 717</h2>
      </div>
      <div class="very-slightly-padded">
        <a href="" class="action-button"><i class="fa fa-phone" aria-hidden="true" style = "font-size: 100%"></i> Peça Orçamento Grátis </a>
      </div>
    </div>
  </div>

<div id="serviços" class="banner_2" style="background-image: linear-gradient(-225deg, rgba(32,74,135,1.0) 100%, rgba(237,212,0,0.0) 00%), url('');">
  <div class="banner-content">
    <div class="container">
    <div class="row">
      <div class="col-xs12">
        <h2>Os Nossos Serviços</h2>
        <h3>Áreas especializadas de trabalho</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3" style="transition: all 0.25s ease;">
        <div>
        <img src="resources/015-construction.png" alt="icon of wrench" width="80px">
          <h3>Manutenção de Esgotos e Canalizações</h3>
          <p>Efetuamos trabalhos de desentupimento no interior ou no exterior do imóvel.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3" style="transition: all 0.25s ease;">
        <div>
        <img src="resources/pressure.png" alt="icon of pressure reader" width="80px">
          <h3>Desentupimento de Esgotos e Canalizações</h3>
          <p>Desentupimento, limpeza de raízes, gorduras acumuladas, etc. Utilizamos máquinas versáteis adequadas à maioria das situações.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3" style="transition: all 0.25s ease;">
        <div>
        <img src="resources/014-drawing.png" alt="pen and ruller" width="80px">
          <h3>Locazição de Caixas por Sonda</h3>
          <p>Utilizamos sondas para localizar com precisão caixas de esgoto escondidas no solo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3" style="transition: all 0.25s ease;">
        <div>
        <img src="resources/004-hammer-3.png" alt="Hammer" width="80px">
          <h3>Manutenções Gerais</h3>
          <p>Efetuamos manutenções gerais, dentro e fora do imóvel.</p>
        </div>
      </div>
    </div>
</div>
  </div>
</div>
<div class="banner_2" style="background-image: linear-gradient(-225deg, rgba(85,87,83,0.4) 100%, rgba(237,212,0,0.0) 00%), url('resources/pdb-122965.jpg');">
  <div class="banner-content">
  <div id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="tel:+351966513717" class = "a-tag-contacts" >  <i class="fa fa-phone" aria-hidden="true" style = "font-size: 100%"></i>  (+351) 966 513 717 </a>
        </div>

        <div class="col-xs-12 text-center">
          <h4> ou</h4>
        </div>
      </div>


      <div class="row">
        <div>
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <form action="https://formspree.io/team@soltroiavillas.com"
            method="POST">
              <input type="hidden" name="_language" value="pt" />
              <input type="hidden" name="_cc" value="filipe.p@soltroiavillas.com" />
              <input type="hidden" name="_subject" value="New submission!" />
              <input type="text" name="_gotcha" style="display:none" />
              <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome"/>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="_replyto" class="form-control" placeholder="sou.eu@email.com"/>
              </div>
              <div class="form-group">
                <label>Mensagem</label>
                <textarea type="text" name="mensagem" class="form-control" placeholder="Escrever a sua mensagem aqui"></textarea>
              </div>
              <div class="text-center">
                <input type="submit" value="Enviar" class="send-button" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   </div>
  </div>

  <div id="footer">

    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
        <p> </p>
          <img height="100" src="resources/mantendo_limpando_logo_rectangle.jpg" />
        </div>
        <div class="col-xs-12 col-sm-4 text-left">
        <h4>THIS PAGE</h4>
        <p>  <a href="#início" class="footer-mantendo-limpando-item">Início</a></p>
        <p><a href="#serviços" class="footer-mantendo-limpando-item">Serviços</a></p>
        <p><a href="#contacts" class="footer-mantendo-limpando-item">Contactos</a></p>
        </div>
        <div class="col-xs-12 col-sm-4 text-left">
          <h4>CONTACTS</h4>
          <a href="tel:+351966513717"  class="footer-mantendo-limpando-item"><p><i class="fa fa-phone" aria-hidden="true" style = "font-size: 100% "></i>  (+351)966513717</p></a>
          <p><i class="fa fa-envelope-o" aria-hidden="true"></i> team@mantendoelimpando.pt</p>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
