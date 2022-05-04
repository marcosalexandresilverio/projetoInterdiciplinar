<?php
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Burguer </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <!--<link href="css/responsive.css" rel="stylesheet" />--> 
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hamburguer.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Burguer House
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Menu </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="pedidos.php">Meus pedidos</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="cadastro.php">Cadastre-se</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  
                </svg>
              </a>
              <a href="login.php" class="order_online">
                Login
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  
</br> 
<div class="heading_container heading_center">
        <h2>
         Meus Pedidos
        </h2>
      </div>

      <table class="container" >
        <thead >
          <tr >
              <th>Item:</th>
              <th>Quantidade</th>
              <th>Valor</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Gran Burguer King</td>
            <td><input type="number" name="quant" id="quant" value="1"></td>
            <td>R$35,00</td>
          </tr>
          <tr>
          <td>Gran Burguer King</td>
            <td><input type="number" name="quant" id="quant" value="1"></td>
            <td>R$35,00</td>
          </tr>
          <tr>
          <td>Gran Burguer King</td>
            <td><input type="number" name="quant" id="quant" value="1"></td>
            <td>R$35,00</td>
          </tr>
          <td>Gran Burguer King</td>
            <td><input type="number" name="quant" id="quant" value="1"></td>
            <td>R$35,00</td>
            <tr>
          <td>Gran Burguer King</td>
            <td><input type="number" name="quant" id="quant" value="1"></td>
            <td>R$35,00</td>
          </tr>
        </tbody>
        <thead >
          <tr >
              <th></th>
              <th>Quantidade total</th>
              <th>Valor total</th>
          </tr>
        </thead>
      </table>
            
</div>


  
  
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
            Desenvolvedores:
              </h4>
              <div class="contact_link_box">
                <a href="https://br.linkedin.com/in/leonamknupp">
                  <span>
                    Leonan Knupp
                  </span>
                </a>
                <a href="https://br.linkedin.com/in/marcos-silverio-9b911367">
                  <span>
                    Marcos Silverio
                  </span>
                </a>
                <a href="https://br.linkedin.com/in/flavianelopesferreira">
                  <span>
                    Flaviane Ferreira
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Burguer House
            </a>
            <p>
              A casa do hamburguer artesanal de</br> Poços de Caldas!
            </p>
            
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Aberto todos os dias
          </h4>
          
          <p>
            Horario: 16:00 às 23:00
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
        <button id="btn1"><a href="https://portal.ifsuldeminas.edu.br/" target="_blank">If Sul de Minas</a></button><br><br>
             <button id="btn-box"><a href="franqueado.html" target="_blank">Área do franqueado</a></button>
        </p>
      </div>
    </div>
  

</body>

</html>