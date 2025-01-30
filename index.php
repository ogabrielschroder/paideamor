<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pai de Amor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="image/favicon.png" type="image/png">
</head>
<body>
    <!---MENU-->
<nav class="navbar">
    <div class="logo">
        <img src="image/logo.png">
    </div>
    <ul class="nav-links">
      <li><a href="index.php">Início</a></li>
      <li><a href="#about">Sobre nós</a></li>
      <li><a href="#contribua">Contribua</a></li>
    </ul>
    <div class="burger"> <!--mobile--> 
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
    <!--FIM-MENU-->
    <div class='banner-inicial'>
      <img src='image/bannerinicial.png'>
      <div class="texto">
      <h1>PAI DE AMOR</h1>
    </div><!--texto--> 
    </div><!--banner-inicial-->


    <div id="about" class="sobre-nos-container">
    <div class="conteudo-sobre-nos">
        <h2>Sobre Nós</h2>
        <p class="descricao">
        Fundada em Indaial, Santa Catarina, a Igreja Pai de Amor é uma comunidade cristã que tem como missão espalhar o amor de Deus, acolher e transformar vidas. Sob a liderança do Pastor Lucas Ogliari, buscamos ser um farol de fé, esperança e solidariedade, oferecendo um espaço de comunhão, oração e crescimento espiritual.

Com cultos semanais, nossas portas estão abertas para todos que desejam experimentar a presença de Deus e fortalecer sua jornada de fé. Nos reunimos toda Quinta-feira às 20h para um culto de ensino e reflexão, e aos Domingos às 19h para um culto de celebração e adoração.
        </p>
        <p class="missao">
        Acreditamos que cada pessoa é amada por Deus e tem um propósito divino. Junte-se a nós para crescer na fé, compartilhar momentos de oração e ser transformado pelo amor de Deus.
        </p>
    </div><!--Conteudo-sobre-nos--> 
</div><!--sobre-nos-container--> 

<section id="contribua" class="contribua-section hidden">
    <div class="content">
      <h2>Contribua com a Nossa Igreja</h2>
      <p>Ajude-nos a continuar nossa missão de fé e serviço à comunidade. Escaneie o QR Code abaixo para fazer sua contribuição via Pix.</p>
    </div>

    <div class="qrcode-container">
      <!-- Substitua o src pelo QR Code da sua igreja -->
      <img src="image/qrcode.png" alt="QR Code Pix" class="qrcode" />
    </div>
    </div>

  </section><!--contribua-section-->

  <section id="endereco" class="endereco-section">
    <div class="mapa-container">
      <!-- Substitua o src abaixo pelo link do mapa da sua igreja no Google Maps -->
      <iframe 
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Av.%20Brasil%2C%202133%20-%20apto%2001%20-%20Rio%20Morto%2C%20Indaial%20-%20SC%2C%2089082-410&zoom=16&maptype=roadmap" 
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </section><!--endreco-section-->
  <footer class="footer">
  <div class="footer-container">
    <div class="footer-left">
      <h3>Igreja Pai de Amor</h3>
      <p>Endereço: Av. Brasil, 2133 - apto 01 - Rio Morto, Indaial - SC, 89082-410</p>
      <p>&copy; 2024 Igreja Pai de Amor | Todos os direitos reservados</p>
    </div>
    <div class="footer-right">
      <h4>Siga-nos nas redes sociais</h4>
      <div class="social-icons">
        <a href="https://www.instagram.com/paideamorigreja/" target="_blank" class="social-icon">
          <img src="image/instagram.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/igrejapaideamor/" target="_blank" class="social-icon">
          <img src="image/facebook.png" alt="Facebook">
        </a>
        <a href="https://www.youtube.com/@paideamorigreja" target="_blank" class="social-icon">
          <img src="image/youtube.png" alt="YouTube">
        </a>
      </div>
    </div>
  </div>
    <!-- Criado por e logo -->
    <div class="footer-bottom">
    <p>Criado por <span class="created-by-logo"><a href="https://flux.dev.br/" target="_blank"><img src="image/logoo.png" alt="Logo" class="created-logo"></span></p>
  </div>
</footer><!--footer-->
<!-- Botão para subir a página -->
<!-- Botão para subir a página -->
<a href="#" class="back-to-top">
  <i class="fa fa-chevron-up"></i>  <!-- Ícone da seta para cima -->
</a>







<div class='whatsappicon'>
      <a href="https://w.app/igrejapaideamor" target="_blank">  <!--Link que será puxado-->
      <img src='image/WhatsappLogo.png'>  <!--Icone-->
    </div><!--whatsappicon-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>