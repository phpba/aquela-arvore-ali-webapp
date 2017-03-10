<!DOCTYPE html>
<html>
  <head>
    <title>Cidade Verde</title>
      
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <header class="container" style="padding-top: 15px;">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">In&iacute;cio</a></li>
            <li role="presentation"><a href="#">Sobre N&oacute;s</a></li>
            <li role="presentation"><a href="#">Equipe</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Cidade Verde</h3>
      </div>
    </header>
    
    <section>@yield('content')</section>
    
    <footer style="background-color:#111; color:white; ">
      <div class="container">
        <div class="row" style="padding: 20px 0px 20px 0px;">
          <div class="col-xs-4">
            <h3>Mapa do Site</h3>
            <p><a href="">Início</a></p>
            <p><a href="">Início</a></p>
            <p><a href="">Início</a></p>
            <p><a href="">Início</a></p>
            <p><a href="">Início</a></p>
          </div>
          <div class="col-xs-4">
            <h3>Nossas Redes Sociais</h3>
            <p><a href="https://groups.google.com/forum/#!forum/phpba" target="_blank">PHPBA no Google Groups</a></p>
            <p><a href="https://telegram.me/phpba" target="_blank">Canal do PHPBA no Telegram</a></p>
            <p><a href="https://github.com/phpba" target="_blank">Organização PHPBA no Github</a></p>
            <p><a href="https://www.facebook.com/PHP-BA-1452159261670420">Grupo PHPBA no Facebook</a></p>
            <p><a href="https://twitter.com/phpba" target="_blank">Twitter do PHPBA</a></p>
          </div>
          <div class="col-xs-4"></div>
        </div>
      </div>
    </footer>
    <footer style="background-color: black; color: white;">
      <div class="container">
        <div class="row" style="padding: 20px 0px 10px 0px;">
          <div class="col-xs-3">
            <address>Salvador, Bahia, Brazil</address>
          </div>
          <div class="col-xs-6">
            <p>Este é um site do <a href="http://www.phpba.com.br" target="_blank">PHPBA</a> 2017 &copy; Todos os direitos reservados.</p>
          </div>
          <div class="col-xs-3">
            <p>Desenvolvido por <a href="mailto://felipebastosweb@gmail.com">PHPBA</a></p>
          </div>
        </<div>
      </div>
    </footer>
  </body>
</html>