
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Serviços</title>
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
.carousel {
  margin: auto;
}


</style>
<script>


  </script>

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
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">SOBRE</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVIÇOS
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="site.php">Site</a></li>
            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
            <li><a class="dropdown-item" href="desing.php">Design</a></li>
            <li><a class="dropdown-item" href="social.php">Media social</a></li>
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



<div class="container3"style="background-image: url(imagens_css/servicos.png); background-size: cover; display: flex; justify-content: space-evenly;">
<section>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
      <h3 style="color: white; font-size: 450%; font-family: 'Gill Sans',  'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding-top: 10px;">Nossos Serviços</h3>
        <p  style="padding-right: 4%; padding-right: 4%; padding-top: 3%; font-family:arial;font-size: 150%;padding-bottom: 7%;color: white;line-height: 1.5em;
      text-align: center";>
        Oferecemos soluções completas em desenvolvimento de sites, desde a 
        <br>concepção até a finalização, com foco em design de alta qualidade e 
        <br>segurança robusta, garantindo o suporte completo. 
    </p>
      </div>
    </div>
  </div>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    </div>

    <div class="carousel-inner"style="text-align: center;">
      <div class="carousel-item active" >
        <img src="img/site1.png" alt="site" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Site</h5>
          <p>Um site na internet pode ser uma ferramenta
            poderosa para qualquer...</p>
            <a style=" color: white;" href="site.php">Veja mais</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/blog1.png" alt="blog" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Blog</h5>
          <p>Um blog é um site ou uma seção de um site que
            apresenta postagens...</p>
            <a style=" color: white;" href="blog.php">Veja mais</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/design1.png" alt="design" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Design</h5>
          <p>O design de um site é um elemento fundamental para o
            sucesso de um projeto...</p>
            <a style=" color: white;" href="desing.php">Veja mais</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/media1.png" alt="design" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Media social</h5>
          <p>Social media, ou mídia social, é uma das principais
            ferramentas utilizadas...</p>
            <a style=" color: white;" href="social.php">Veja mais</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/edicao1.png" alt="design" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Edição de imagem</h5>
          <p>A edição de imagem é uma das atividades mais importantes
            no universo da fotografia...</p>
            <a style=" color: white;" href="edicao.php">Veja mais</a>
        </div> 
      </div>

      <div class="carousel-item">
        <img src="img/web1.png" alt="design" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Hospedagem</h5>
          <p>A hospedagem de um site é um dos aspectos mais
            importantes quando se trata de criar...</p>
            <a style=" color: white;" href="hospedagem.php">Veja mais</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/segu1.png" alt="design" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Segurança</h5>
          <p>A segurança da informação é um tema cada vez mais
            importante no mundo moderno...</p>
            <a style=" color: white;" href="seguranca.php">Veja mais</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/suporte1.png" alt="design" style="width: 70%;">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font-size: 150%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Suporte</h5>
          <p>O suporte ao cliente é um aspecto crítico de qualquer
            negócio, independentemente...</p>
            <a  href="suporte.php">Veja mais</a>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br><br>
</div>

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



