<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('info@arteculturaemmovimento.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google-site-verification" content="vAXOM-C5EUGGIwrxTNowJclsNz2vX4n1x9oochtq--s" />
  <title>Arte &amp; Cultura em Movimento</title>
  <meta name="description" content="MeuPreço Supermercados, compara e poupa até 60% nas tuas compras de supermercado.">
  <meta name="keywords" content="MeuPreço Supermercados, compara e poupa até 60% nas tuas compras de supermercado.">
  <meta name="twitter:description" content="MeuPreço Supermercados">
  <meta name="twitter:title" content="SMeuPreço Supermercados">
  <meta name="twitter:description" content="MeuPreço Supermercados">
  <link rel="canonical" href="https://www.meupreco.co.mz/">
  <meta property="og:title" content="MeuPreço Supermercados">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.meupreco.co.mz/">
  <meta property="og:site_name" content="MeuPreço">

  <link rel="shortcut icon" type="image/png" href="img/fav_icon.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <script src="https://kit.fontawesome.com/b0d58c42f6.js" crossorigin="anonymous"></script>
</head>

<body id="home">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container"><a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a><button
        class="navbar-toggler compressed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="fa fa-bars"></span></button>
      <div class=" collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="index.php">Home <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item "><a class="nav-link" href="">sobre nós</a></li>
          <li class="nav-item dropdown dropbtn"><a class="nav-link servi_icon" href="">serviços</a>
            <div class="dropdown-content">
              <a href=" ">consultoria</a>
              <a href=" ">curadoria</a>
              <a href=" ">agenciamento</a>
                <a href=" g">acessória</a>
              <a href=" l">conferências</a>
              <a href=" ">artes plásticas</a>
                <a href=" ">artesanato</a>
                  <a href=" ">feiras &amp; exposições</a>
            </div>
          </li>
             <li class="nav-item"><a class="nav-link get_touch" href="">galéria</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="">contactos</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="hero-caption text-center">
           <h1 class="title">pagina em contrução</h1>
           <p class="p_hero">Promovemos as artes e cultura como factor de desenvolvimento económico, social e humano em Moçambique, através da proteção, promoção e valorização do património material e imaterial.</p>
            <p class="p_hero">+258 84 484 6467 | info@arteculturaemmovimento.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="js/main.js"></script>
</body>

</html>
