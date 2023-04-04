
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Orçamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>

    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head> 
   <style>
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
/* ======================== */
/*   Syed Sahar Ali Raza    */
/* ======================== */
@import url(https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900italic,900);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
body{background-color:#eee;}

#generic_price_table{
  background-color: #f0eded;
}

/*PRICE COLOR CODE START*/
#generic_price_table .generic_content{
  background-color: #fff;
}

#generic_price_table .generic_content .generic_head_price{
  background-color: #f6f6f6;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
  border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
  color: #525252;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    color: #414141;
}

#generic_price_table .generic_content .generic_feature_list ul li{  
  color: #a7a7a7;
}

#generic_price_table .generic_content .generic_feature_list ul li span{
  color: #414141;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
  background-color: #E4E4E4;
  border-left: 5px solid #2ECC71;
}

#generic_price_table .generic_content .generic_price_btn a{
  border: 1px solid #2ECC71; 
    color: #2ECC71;
} 

#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg{
  border-color: #2ECC71 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #2ECC71;
  color: #fff;
}

#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head span,
#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head span{
  color: #fff;
}

#generic_price_table .generic_content:hover .generic_price_btn a,
#generic_price_table .generic_content.active .generic_price_btn a{
  background-color: #2ECC71;
  color: #fff;
} 
#generic_price_table{
  margin: 50px 0 50px 0;
    font-family: 'Raleway', sans-serif;
}
.row .table{
    padding: 28px 0;
}

/*PRICE BODY CODE START*/

#generic_price_table .generic_content{
  overflow: hidden;
  position: relative;
  text-align: center;
}

#generic_price_table .generic_content .generic_head_price {
  margin: 0 0 20px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content{
  margin: 0 0 50px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
    border-style: solid;
    border-width: 90px 1411px 23px 399px;
  position: absolute;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head{
  padding-top: 40px;
  position: relative;
  z-index: 1;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
    font-family: "Raleway",sans-serif;
    font-size: 28px;
    font-weight: 400;
    letter-spacing: 2px;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag{
  padding: 0 0 20px;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price{
  display: block;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 28px;
    font-weight: 400;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    font-family: "Lato",sans-serif;
    font-size: 60px;
    font-weight: 300;
    letter-spacing: -2px;
    line-height: 60px;
    padding: 0;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 24px;
    font-weight: 400;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    font-family: "Lato",sans-serif;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 3px;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_feature_list ul{
  list-style: none;
  padding: 0;
  margin: 0;
}

#generic_price_table .generic_content .generic_feature_list ul li{
  font-family: "Lato",sans-serif;
  font-size: 18px;
  padding: 15px 0;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
  transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  -webkit-transition: all 0.3s ease-in-out 0s;

}
#generic_price_table .generic_content .generic_feature_list ul li .fa{
  padding: 0 10px;
}
#generic_price_table .generic_content .generic_price_btn{
  margin: 20px 0 32px;
}

#generic_price_table .generic_content .generic_price_btn a{
    border-radius: 50px;
  -moz-border-radius: 50px;
  -ms-border-radius: 50px;
  -o-border-radius: 50px;
  -webkit-border-radius: 50px;
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 18px;
    outline: medium none;
    padding: 12px 30px;
    text-decoration: none;
    text-transform: uppercase;
}

#generic_price_table .generic_content,
#generic_price_table .generic_content:hover,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head h2,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head h2,
#generic_price_table .generic_content .price,
#generic_price_table .generic_content:hover .price,
#generic_price_table .generic_content .generic_price_btn a,
#generic_price_table .generic_content:hover .generic_price_btn a{
  transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  -webkit-transition: all 0.3s ease-in-out 0s;
} 
@media (max-width: 320px) { 
}

@media (max-width: 767px) {
  #generic_price_table .generic_content{
    margin-bottom:75px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  #generic_price_table .col-md-3{
    float:left;
    width:50%;
  }
  
  #generic_price_table .col-md-4{
    float:left;
    width:50%;
  }
  
  #generic_price_table .generic_content{
    margin-bottom:75px;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
}
@media (min-width: 1200px) {
}
#generic_price_table_home{
   font-family: 'Raleway', sans-serif;
}

.text-center h1,
.text-center h1 a{
  color: #7885CB;
  font-size: 30px;
  font-weight: 300;
  text-decoration: none;
}
.demo-pic{
  margin: 0 auto;
}
.demo-pic:hover{
  opacity: 0.7;
}

#generic_price_table_home ul{
  margin: 0 auto;
  padding: 0;
  list-style: none;
  display: table;
}
#generic_price_table_home li{
  float: left;
}
#generic_price_table_home li + li{
  margin-left: 10px;
  padding-bottom: 10px;
}
#generic_price_table_home li a{
  display: block;
  width: 50px;
  height: 50px;
  font-size: 0px;
}
#generic_price_table_home .blue{
  background: #3498DB;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .emerald{
  background: #2ECC71;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .grey{
  background: #7F8C8D;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .midnight{
  background: #34495E;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .orange{
  background: #E67E22;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .purple{
  background: #9B59B6;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .red{
  background: #E74C3C;
  transition:all 0.3s ease-in-out 0s;
}
#generic_price_table_home .turquoise{
  background: #1ABC9C;
  transition: all 0.3s ease-in-out 0s;
}

#generic_price_table_home .blue:hover,
#generic_price_table_home .emerald:hover,
#generic_price_table_home .grey:hover,
#generic_price_table_home .midnight:hover,
#generic_price_table_home .orange:hover,
#generic_price_table_home .purple:hover,
#generic_price_table_home .red:hover,
#generic_price_table_home .turquoise:hover{
  border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .divider{
  border-bottom: 1px solid #ddd;
  margin-bottom: 20px;
  padding: 20px;
}
#generic_price_table_home .divider span{
  width: 100%;
  display: table;
  height: 2px;
  background: #ddd;
  margin: 50px auto;
  line-height: 2px;
}
#generic_price_table_home .itemname{
  text-align: center;
  font-size: 50px ;
  padding: 50px 0 20px ;
  border-bottom: 1px solid #ddd;
  margin-bottom: 40px;
  text-decoration: none;
    font-weight: 300;
}
#generic_price_table_home .itemnametext{
    text-align: center;
    font-size: 20px;
    padding-top: 5px;
    text-transform: uppercase;
    display: inline-block;
}

.price-heading{
    text-align: center;
}
.price-heading h1{
  color: #666;
  margin: 0;
  padding: 0 0 50px 0;
}
.demo-button {
    background-color: #333333;
    color: #ffffff;
    display: table;
    font-size: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    margin-bottom: 50px;
    outline-color: -moz-use-text-color;
    outline-style: none;
    outline-width: medium ;
    padding: 10px;
    text-align: center;
    text-transform: uppercase;
}
.bottom_btn{
  background-color: #333333;
    color: #ffffff;
    display: table;
    font-size: 28px;
    margin: 60px auto 20px;
    padding: 10px 25px;
    text-align: center;
    text-transform: uppercase;
}
.demo-button:hover{
  background-color: #666;
  color: #FFF;
  text-decoration:none;
  
}

</style>



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
            <li><a class="dropdown-item" href="site.php">Site</a></li>
            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
            <li><a class="dropdown-item" href="desing.php">Design</a></li>
            <li><a class="dropdown-item" href="social.php">Media social</a></li>
            <li><a class="dropdown-item" href="edição.php">Edição de imagem</a></li>
            <li><a class="dropdown-item" href="hospedagem.php">Hospedagem</a></li>
            <li><a class="dropdown-item" href="seguranca.php">Segurança</a></li>
            <li><a class="dropdown-item" href="suporte.php">Suporte</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">CONTATO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ORÇAMENTO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



                  <section id="mainSection">
                  
<div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                        <h1>Orçamentos</h1>
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <div class="container">
            
            <!--BLOCK ROW START-->
            <div class="row">
                <div class="col-md-4">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Basico</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag price-animate clearfix"> 
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">99</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a  href="">Sign up</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <div class="col-md-4">
                
                <!--PRICE CONTENT START-->
                  <div class="generic_content clearfix">
                      
                      <!--HEAD PRICE DETAIL START-->
                      <div class="generic_head_price clearfix">
                      
                          <!--HEAD CONTENT START-->
                          <div class="generic_head_content clearfix">
                          
                            <!--HEAD START-->
                              <div class="head_bg"></div>
                              <div class="head">
                                  <span>Plus</span>
                              </div>
                              <!--//HEAD END-->
                              
                          </div>
                          <!--//HEAD CONTENT END-->
                          
                          <!--PRICE START-->
                          <div class="generic_price_tag clearfix">  
                              <span class="price">
                                  <span class="sign">$</span>
                                  <span class="currency">99</span>
                                  <span class="cent">.99</span>
                                  <span class="month">/MON</span>
                              </span>
                          </div>
                          <!--//PRICE END-->
                          
                      </div>                            
                      <!--//HEAD PRICE DETAIL END-->
                      
                      <!--FEATURE LIST START-->
                      <div class="generic_feature_list">
                        <ul>
                            <li><span>2GB</span> Bandwidth</li>
                              <li><span>150GB</span> Storage</li>
                              <li><span>12</span> Accounts</li>
                              <li><span>7</span> Host Domain</li>
                              <li><span>24/7</span> Support</li>
                          </ul>
                      </div>
                      <!--//FEATURE LIST END-->
                      
                      <!--BUTTON START-->
                      <div class="generic_price_btn clearfix">
                        <a id="myButton" class="" href=""><div class="myElement">Sign up</div></a>
                      </div>
                      <!--//BUTTON END-->
                      
                  </div>
                  <!--//PRICE CONTENT END-->
                      
              </div>
            
                <div class="col-md-4">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Vip</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">299</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="">Sign up</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
            </div>  
            <!--//BLOCK ROW END-->
            
        </div>
    </section>             

</div>
                         



<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <div class="container p-4 pb-0">
  <section style=" padding-top: 10px;display: flex; justify-content: center;"  class="mb-4">
        <!-- Facebook -->
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