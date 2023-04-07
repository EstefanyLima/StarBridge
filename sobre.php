
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sobre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
   <style>
/*cards*/
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */


.container {
    margin-top: 0px;
    
}


.card {
    padding: 10px;
    border-radius: 20px;
    overflow: hidden;
    max-width: 280px;
    max-height: 340px;
    cursor: pointer;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

}

.card .card-image {
    width: 100%;
    max-height: 340px;
}

.card .card-image img {
    width: 100%;
    max-height: 340px;
    object-fit: cover;
}

.card .card-content {
    position: absolute;
    bottom: -180px;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(15px);
    min-height: 140px;
    width: 100%;
    transition: bottom .4s ease-in;
    box-shadow: 0 -10px 10px rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.card:hover .card-content {
    bottom: 0px;
}

.card:hover .card-content h4,
.card:hover .card-content h5 {
    transform: translateY(10px);
    opacity: 1;
}

.card .card-content h4,
.card .card-content h5 {
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    transition: 0.8s;
    font-weight: 500;
    opacity: 0;
    transform: translateY(-40px);
    transition-delay: 0.2s;
}

.card .card-content h5 {
    transition: 0.5s;
    font-weight: 200;
    font-size: 0.8rem;
    letter-spacing: 2px;
}

.card .card-content .social-icons {
    list-style: none;
    padding: 0;
}


.card .card-content .social-icons li {
    margin: 10px;
    transition: 0.5s;
    transition-delay: calc(0.15s * var(--i));
    transform: translateY(50px);
}


.card:hover .card-content .social-icons li {
    transform: translateY(20px);
}

.card .card-content .social-icons li a {
    color: #fff;
}

.card .card-content .social-icons li a span {
    font-size: 1.3rem;
}

@media(max-width: 991.5px) {
    .container {
        margin-top: 20px;
    }

    .container .row .col-lg-4 {
        margin: 20px 0px;
    }
}
/*estilizacao*/
#mainSection{
        min-height: 840px;
      
       }
       .nav-link{
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.95rem;
    color: #fff;
    letter-spacing: 0.0625em;
}
@import url(//fonts.googleapis.com/css?family=Montserrat:300,500);
.team4 {
  font-family: "Montserrat", sans-serif;
	color: #8d97ad;
  font-weight: 300;
}

.team4 h1, .team4 h2, .team4 h3, .team4 h4, .team4 h5, .team4 h6 {
  color: #3e4555;
}

.team4 .font-weight-medium {
	font-weight: 500;
}

.team4 h5 {
    line-height: 22px;
    font-size: 18px;
}

.team4 .subtitle {
    color: #8d97ad;
    line-height: 24px;
		font-size: 13px;
}

.team4 ul li a {
  color: #8d97ad;
  padding-right: 15px;
  -webkit-transition: 0.1s ease-in;
  -o-transition: 0.1s ease-in;
  transition: 0.1s ease-in;
}

.team4 ul li a:hover {
  -webkit-transform: translate3d(0px, -5px, 0px);
  transform: translate3d(0px, -5px, 0px);
	color: #316ce8;
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
          <a class="nav-link" href="#">SOBRE</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="serviços.php" role="button" aria-expanded="false">
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


<!-- conteudo  com min-height de 840px-->
<section class="cover" id="mainSection" style="background-image: url(imagens_css/equipe.png); background-size: cover; display: flex; justify-content: space-evenly;">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
      <br>
      <h3 style="font-size: 50px;" class="display-5 text-white" >Sobre nós</h3><br>
              <p style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;" class="text-white">
                Na StarBridge, nossa equipe trabalha incansavelmente para criar soluções tecnológicas 
               personalizadas usando HTML, PHP, 
                CSS e jQuery para atender às necessidades de nossos clientes. </p>
                <p class="text-white" style="font-size: 25px;font-family: Arial, Helvetica, sans-serif;">Como alunos do 4º ano do curso de informática do IFSP, estamos 
                  sempre atualizados com as últimas tendências e tecnologias do 
                  setor.</p> 
                <p class="text-white" style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;"> 
                Nós nos esforçamos para fornecer serviços de alta qualidade
                e soluções criativas 
                para ajudar nossos clientes a alcançar seus 
                objetivos de negócios online.
                </p>
                <br><br><br><br>
      </div>
            <div class="col-lg-3">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/pedro.jpg">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Pedro Tomaz</h4>
                        <h5>Gerente e Full-Stack</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/isa (1).png">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Isabela Hipolito</h4>
                        <h5>SubGerente e back-end</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/estefany (1).png">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Estefany Ferreira</h4>
                        <h5>Front-end</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="img/lorenzo.png">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Lorenzo Nogueira</h4>
                        <h5>Front-end</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Equipe -->


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