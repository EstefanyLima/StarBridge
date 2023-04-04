
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Media Social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
   <style>
/*estilizacao*/

       .nav-link{
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.95rem;
    color: #fff;
    letter-spacing: 0.0625em;
}
.botao01{
  background-color: #CCCCCC;
  border: none;
  color: black;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  text-align: center;
  position: relative;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 4%;
  width: 30%;
  padding-bottom: 1%;
  padding-top: 1%;

 }
</style>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span style="color:#74aeba">Star</span>Bridge</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">SOBRE</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="serviços.php" role="button" aria-expanded="false">
            SERVIÇOS
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Site</a></li>
            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
            <li><a class="dropdown-item" href="desing.php">Design</a></li>
            <li><a class="dropdown-item" href="#">Media social</a></li>
            <li><a class="dropdown-item" href="edicao.php">Edição de imagem</a></li>
            <li><a class="dropdown-item" href="hospedagem.php">Hospedagem</a></li>
            <li><a class="dropdown-item" href="seguranca.php">Segurança</a></li>
            <li><a class="dropdown-item" href="suporte.php">Suporte</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">CONTATO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orcamento.php">ORÇAMENTO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- conteudo  com min-height de 840px-->
<section>
<div class="container">
  <h1 class="text-center mt-4 text-dark" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: black; font-size: 60px;">Social Media</h1>
  <div class="row">
  <div class="col">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/social.jpg" width="100%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/social2.jpg" width="100%" alt="...">  
    </div>
    <div class="carousel-item">
      <img src="img/social3.jpg" width="100%" alt="...">  
    </div>
  </div>
    </div>
    </div>
    <div class="col">
      <p style="font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  padding-left: 20px; padding-top: 30px;">
      
        Social media, ou mídia social, é uma das principais
        ferramentas utilizadas pelas empresas atualmente para
        se comunicarem com seus clientes e ampliarem sua
        presença digital. O termo engloba uma série de
        plataformas online, como o Facebook, Instagram, Twitter,
        LinkedIn e TikTok, entre outros, que permitem a interação e
        scompartilhamento de conteúdo entre pessoas e empresas.
        
      </p>
      <p style="font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding-left: 20px;">
        A utilização de social media pelas empresas pode trazer
        diversos benefícios, como o aumento da visibilidade
        da marca, a geração de engajamento e relacionamento
        com os clientes, a identificação de novas oportunidades
        de negócio, a criação de campanhas de marketing mais
        eficientes e a mensuração de resultados em tempo real.
        No entanto, para obter sucesso com social media, é
        necessário planejamento, estratégia e dedicação.
      </p>
      <div>
    <a href="orcamento.php" style="color: black;" class="botao01">Ver orçamento</a>
   </div>
    </div>
  </div>
</div>
<br>



</section>




<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <div class="container p-4 pb-0">
  <section style=" padding-top: 10px;display: flex; justify-content: center;"  class="mb-4">      <!-- Facebook -->
      <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;"href="#!"role="button">
        <i class="fab fa-facebook-f"></i>
      </a>

      <!-- Twitter -->
      <a class="btn text-white btn-floating m-1" style="background-color: #55acee;"href="#!"role="button">
      <i class="fab fa-twitter"></i>
    </a>

      <!-- Google -->
      <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;"href="#!"role="button">
      <i class="fab fa-google"></i>
    </a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!"role="button">
      <i class="fab fa-instagram"></i>
    </a>

      <!-- Linkedin -->
      <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i>
      </a>
      <!-- Github -->
      <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"
        ><i class="fab fa-github"></i>
      </a>
    </section>
  </div>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <i class='fas fa-star me-2'> </i>starbridge
          </h6>
          <p>
         
        
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           Serviços
          </h6>
          <p>
            <a href="#!" class="text-reset">Site</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Blog</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Segurança</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Edição</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-2"></i>New York, NY 10012, US</p>
          <p><i class="fas fa-envelope me-3"></i>starbridge@18.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href=""> StarBridge Company - Todos os direitos reservados</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>