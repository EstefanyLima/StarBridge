
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   
   <style>
/*estilizacao*/
        #mainSection{
        min-height: 800px;
        background-color: white;
       
       }
       .nav-link{
        font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.95rem;
    color: #fff;
    letter-spacing: 0.0625em;
}

  /* Estilo para o título "Formulário de Contato" */
  h5 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
  }
  
  /* Estilo para as labels do formulário */
  label {
    font-size: 18px;
    font-weight: bold;
  }
  
  /* Estilo para os inputs e textarea */
  input[type="text"],
  input[type="email"],
  textarea {
    font-size: 18px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
    width: 100%;
  }
  
  /* Estilo para o botão de enviar */
  input[type="submit"] {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  /* Estilo para a mensagem de sucesso */
  #mensagem {
    display: none;
    color: green;
    font-size: 18px;
    padding: 10px;
    margin-top: 20px;
    text-align: center;
  }


</style>
<body>

<script src="formulario.js">


</script>



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
            <li><a class="dropdown-item" href="#">Edição de imagem</a></li>
            <li><a class="dropdown-item" href="hospedagem.php">Hospedagem</a></li>
            <li><a class="dropdown-item" href="seguranca.php">Segurança</a></li>
            <li><a class="dropdown-item" href="suporte.php">Suporte</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTATO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orcamento.php">ORÇAMENTO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section id="mainSection">
<h2 class="text-dark text-center"style=" font-size: 60px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-top: 25px">Contate-nos:</h2>
<div class="container" style="background: linear-gradient(-45deg,#466273, #0D0D0D);">
    <div class="row">
      <div class="my-3 col">
        <h4 style="color: white; padding-top: 20%; padding-bottom: 2%; padding-left: 4%; font-size: 30px; ">Telefone:</h4>
    <p style="color: white; padding-left: 4%; font-size: 19px;">704-306-8899</p>
    <h4 style="color: white; padding-top: 5%; padding-bottom: 2%; padding-left: 4%; font-size: 30px;">Endereço:</h4>
    <p style="color: white; padding-left: 4%; font-size: 120%;">Av. Salgado Filho, 3501 - Centro, Guarulhos -<br> SP, 07115-000</p>
      </div>
      <form id="contactForm" class="col-6 p-4 was-validated"> 
        <div class="row">
        <div class="my-1 col">
            <h5 style="color: white; font-size: 200%; padding-top: 10%; padding-bottom: 3%;">Formulário de Contato:</h5>
         <label class="form-label" style="color: white; font-size: 100%;">Digite seu nome:</label>
         <div class="input-group">
            <span  class="input-group-text">Nome</span>
        <input class="form-control" type="text" name="nome" id="name" />
       
  </div>
</div>

         <label class="form-label" style="color: white; padding-top: 4%; font-size: 100%;" id="lblemail">Digite seu e-mail:</label>
         <div class="input-group">
            <span class="input-group-text">Email</span>
         <input class="form-control" type="email" name="f_email" id="email"/>
         <div class="invalid-feedback">Email inválido</div>
  </div>
</div>
          
        <div class="my-3">
         <label for="comment" style="color: white; padding-top: 4%; font-size: 100%;">Comentários:</label>
         <textarea class="form-control" rows="6" id="comment" name="text"></textarea>
  </div>

        <div class="my-3">
         <input class="btn btn-dark" type="submit" name="btn_enviar" value="Enviar" />
   </div>
   </div>
    </div>
  </div>
  <div id="mensagem"></div>
</form>

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
</html>
      </body>
