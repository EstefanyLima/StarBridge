
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
    <style>
      
        header{
            min-height: 10px;
            position: relative;
            
            
        }
        #mainSection{
            min-height: 1550px;
        }
       
        .cover {
        height: 100vh;
        background-size: cover;
        background-position: center;
        min-height: 100vh;

  display: flex; /* Define o layout da seção como flexível */
  justify-content: center; /* Alinha o conteúdo ao centro horizontalmente */
  align-items: center; /* Alinha o conteúdo ao centro verticalmente */
}
      
      /* Centralizando o conteúdo */
      .cover .container {
        position: relative;
        top: 30%;
        transform: translateY(-50%);
      }
      /* Estilizando o texto */
      .cover h1 {
        color: black;
        padding-bottom: 10px;
        font-size: 6rem;
        font-weight: 400px;
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
      
      .cover p {
        color: black;
        font-size: 1.5rem;
        font-weight: 400px;
      }
     
      
      .nav-link{
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.95rem;
    color: #fff;
    letter-spacing: 0.0625em;
}
.nav-link{
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.95rem;
    color: #fff;
    letter-spacing: 0.0625em;
}
    
   </style>
    <script>


$(document).ready(function() {
  $(".card").hover(function() {
    $(this).addClass("shadow-lg").css("cursor", "pointer");
  }, function() {
    $(this).removeClass("shadow-lg");
  });
});

$(document).ready(function() {
  var texto = "SAIBA MAIS";
  var i = 0;
  function escrever() {
    if (i < texto.length) {
      $('#texto').append(texto.charAt(i));
      i++;
      setTimeout(escrever, 50);
    }
  }
  escrever();
});


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
        <a class="nav-link dropdown-toggle" href="serviços.php" role="button" aria-expanded="false">
            SERVIÇOS
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Site</a></li>
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



<section class="cover" style="background-color: #A7D6FB;">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="fw-bold">Tecnologia de ponta a ponta</h1>
        <p class="fs-5">Oferecemos soluções de software personalizadas, criadas especificamente para atender às necessidades exclusivas do seu negócio, aumentando a eficiência e a produtividade.</p>
      </div>
      <div class="col-sm-12 mt-3">
        <a href="serviços.php" class="btn btn-primary"id="texto"></a>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid py-5" style="background-image: url(imagens_css/3.jpg); background-size: cover; display: flex; justify-content: space-evenly; background-attachment: fixed;">
  <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
    <div class="col mb-3 col-lg-3">
      <div class="card h-100" style="background-color: #91CDF2">
        <div class="card-body">
          <img src="img/missao.png" style="height: 80px; width: 70px; margin-left: auto; margin-right: auto; display: block;padding-top: 4%;">
          <h5 class="card-title text-center mt-3">Missão</h5>
          <p class="card-text"style="font-size: 18px;">Nós da StarBridge temos como objetivo oferecer serviços e soluções eficazes e de alta qualidade, que atendam às necessidades dos clientes, com o auxílio da tecnologia, para ajudar no crescimento do seu negócio.</p>
        </div>
      </div>
    </div>
    <div class="col mb-3 col-lg-3">
      <div class="card h-100"style="background-color: #91CDF2">
        <div class="card-body">
          <img src="img/visao.png" style="height: 80px; width: 70px; margin-left: auto; margin-right: auto; display: block;padding-top: 4%;">
          <h5 class="card-title text-center mt-3">Visão</h5>
          <p class="card-text"style="font-size: 18px;">Esperamos ser uma empresa de referência e ser reconhecida em termode de qualidade e inovação em nossos serviços, tornando-se a primeira escolha dos consumidores em nosso setor.</p>
        </div>
      </div>
    </div>
    <div class="col mb-3 col-lg-3">
      <div class="card"style="background-color: #91CDF2; height: 390px;">
        <div class="card-body">
          <img src="img/valor.png" style="height: 80px; width: 70px; margin-left: auto; margin-right: auto; display: block;padding-top: 4%;">
          <h5 class="card-title text-center mt-3">Valores</h5>
          <p class="card-text"style="font-size: 18px;">Os valores da nossa empresa são: qualidade, inovação, segurança, responsabilidade, transparência, ética e profissionalismo.</p>
        </div>
      </div>
    </div>
  </div>
</div>




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
