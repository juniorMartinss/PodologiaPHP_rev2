<?php
    namespace SitePodologiaPHP\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/CadastroPessoas.php");


    use SitePodologiaPHP\DAO\Conexao;
    use SitePodologiaPHP\DAO\CadastroPessoas;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Podologia , Cuidando sua vida</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <style>
    .slider {
      width: 80%;
      margin: 0 auto;
    }
    .slider img {
      display: block;
      margin: 0 auto;
      width:70%;
      height:800%;
      border-radius: 20%;
    }
  </style>
</head>
<body>
        <div class="main">
            <div class="navbar">
             <div class="icon">
                <h2 class="logo">PODOLOGIA</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SOBRE</a></li>
                    <li><a href="#">TRATAMENTOS</a></li>
                    <li><a href="#">CONTATOS</a></li>
                </ul>
            </div>

        </div> 
        <div class="content">
            <h1>PODOLOGIA & <br><span>TRATAMENTOS</span> <br>CLÍNICAS</h1>
            <p class="par">Nosso objetivo é oferecer serviços diferenciados para manter seus pés saudáveis:<br>
                Podogeriatria – tratamentos para pés idosos; <br>
                Tradicional – prevenção de afecções;<br>
                Onicomicose – tratamentos de fungos e micoses de unhas;<br>
                Onicocriptose – cuidados para os pés com unhas encravadas;<br>
                Ortoniquia – correção da curvatura das unhas.

                <br> Sejam bem vindos!! </p>

                <button class="cn"><a href="Agendamento.php">Agendar sua Consulta</a></button>

                <div class="form">
                    <h2>Login</h2>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="" placeholder="Senha">
                    <button class="btnn"><a href="#">Acessar</a></button>

                    <p class="link">Não tem uma conta<br>
                    <a href="Cadastrar.php">Inscreva-se</a> aqui</a></p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="slider">
    <div><img src="../Imagens/pe.jpg"></div>
    <div><img src="../Imagens/lindos.jpg"></div>
    <div><img src="../Imagens/saude.jpg"></div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 700,
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      
    });
  </script>

  
<div id="dest">
            <h1 id="ft">
                <b>Sobre</b>
            </h1>
        </div>
        
        <section class="cards">
          <div class="card">
            <img class="user" src="../Imagens/img11.jpg" alt="">
            <h3>Rosana Martins </h3>

          <p>Olá pessoas lindas! Como estou feliz por compartilhar conhecimento com vocês,
          contando mais sobre essa profissão maravilhosa. Então vamos lá, veremos um pouco
          sobre a história de como tudo começou e aonde já chegamos com o passar dos anos.
          Segundo relatos de estudiosos atuais existem provas pré-históricas do possível
          surgimento da Podologia. Com isso, conclui-se que a Podologia surgiu cerca de 5
          milhões de anos, quando o homem ficou em posição ereta.</p>
          </div>
        </<section>
          
    
        <div id="dest">
            <h1 id="ft">
                <b>Tratamentos</b>
            </h1>
        </div>
        <br>
        <br>
        <br>
        <br>	
    <div class="figuras" style="width: 18rem;">
  <img src="../Imagens/img11.jpg" class="card-img-top" alt="...">
  <div class="card-body">

  <a href="#" class="atencao">Massagem clássica</a>
  <br>
  <br>
    <p class="card-text">técnica  de massagem  de relachamento com pontos específicos  para obter uma circulação  sanguínea  fluindo podendo libertar uma levesa e bem estar de relachar tirando toda pressão do dia a dia.E promovendo alívio das dores e pressão nos pés…</p><br>
  </div>
</div>

<div class="figuras" style="width: 18rem;">
  <img src="../Imagens/img22.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="atencao">Podoprofilaxia</a>
  <br>
  <br>
    <p class="card-text">( Podologia Padrao) = limpeza das cutículas, corte correto da unhas, desencravar tirando excesso de pele nas laterais  dos dedos, região plantar retirada de calos( olho de peixe), retirada de calosidades excesso de pele ( grosso do calcanhar)…</p> <br>
  </div>
</div>

<div class="figuras" style="width: 18rem;">
  <img src="../Imagens/img33.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="atencao">Onicocriptose com e sem infecção</a><br>
  <br>
  <br>
    <p class="card-text">( unha encravada) =retiradada de pedaço de unha que está machucando a pele e da formação de carne espanjosa  na lateral encima do dedo…</p><br>
  </div>
</div>

<div class="figuras" style="width: 18rem;">
  <img src="../Imagens/img44.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="atencao">Tratamento com ortese</a>
  <br>
  <br>
    <p class="card-text"> corrigir a curvatura  da unha que está entrando pra pele e pode causar unha encravada, então usamos esse dispositivo  para correção da unha e evitar encravar…</p><br>
  </div>
</div>

 <div class="figuras" style="width: 18rem;">
  <img src="../Imagens/img55.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="atencao">Tratamento de onicomicose/micose/fungo </a>
  <br>
  <br>
    <p class="card-text">tratamento com limpeza completa das unhas para retirada de maceração da unha causado pelo fungo aplicação de fitoterapico (antimicotico) e aplicação de ozônio ou laser parar inibir proliferação/ manifestação dessa micose para outras unhas e  deixar as unhas saudáveis.…</p><br>
  </div>
</div>  
        <div id="dest">
            <h1 id="ft">
                <b>Localização</b>
                
            </h1>
        </div>
        <br>
        <br>
        <br>
        <br>	
        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.659976174609!2d-46.4352313!3d-23.688114799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6c74ae9a2c41%3A0x3b33ca7fec708a7c!2sR.%20Luiz%20Bottacin%20-%20Alian%C3%A7a%2C%20Ribeir%C3%A3o%20Pires%20-%20SP%2C%2009403-650!5e0!3m2!1spt-BR!2sbr!4v1675987550826!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      <div class="contact-section">
        <div class="contact-info">
          
          <div><i class="fa-solid fa-location-dot"></i>Localização</div>
          <div><i class="fas fa-map-marker-alt"></i>Rua Nº 50 São Bernardo</div>
          <div><i class="fas fa-envelope"></i>Contato</div>
          <div><i class="fas fa-phone"></i>11 4873-73763</div>
          <div><i class="fas fa-clock"></i>Horario: 8:00 As 17:00 </div>
        </div>
      </div>

</body>
</html>