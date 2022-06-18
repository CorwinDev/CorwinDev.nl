<?php
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
$configs = include './config.php';
if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  //send mail via SMTP
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'mail.corwindev.nl';
  $mail->SMTPAuth = true;
  $mail->Username = 'mail@corwindev.nl';
  $mail->Password = $configs['ww'];
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->setFrom('CorwinDev.nl <mail@corwindev.nl>');
  $mail->addAddress('info@corwindev.nl');
  $mail->isHTML(true);
  $mail->Subject = 'Message from Contact Demo';
  $mail->Body = '
  <head>
  <style>
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
  }
  </style>
  </head>
  <body>

  <h1>Contact Request</h1>
  <p>Name: ' . $name . '</p>
  <p>Email: ' . $email . '</p>
  <p>Message: ' . $message . '</p>
  </body>';
  if (!$mail->send()) {
    $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  } else {
    $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
  }
  echo $result;
}

?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Corwin van Velthuizen, Programmeur en webdeveloper" />
  <meta name="author" content="Corwin van Velthuizen" />
  <meta name="keywords" content="Corwin van Velthuizen, CorwinDev, Corwin, CoreFire, Corwin Developer" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <title>Corwin van Velthuizen</title>
  <link rel="stylesheet" href="./assets/css/main.css?<? time() ?>" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GK5TDSP78L"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GK5TDSP78L');
  </script>
</head>

<body>
  <div id="particles-js">
    <div class="header">
      <h1>
        <span class="site-title">Corwin van Velthuizen</span>
        <span class="site-description">Programmeur • Web Developer • </span>
      </h1>
      <div class="header-icons">
        <a aria-label="My LinkedIn Profile" target="_blank" href="https://www.linkedin.com/in/corwindev/">
          <i class="icon fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a aria-label="My Github Profile" target="_blank" href="https://github.com/CorwinDev">
          <i class="icon fa fa-github" aria-hidden="true"></i>
        </a>
        <a aria-label="Send Email" href="#contact" data-scroll><i class="icon fa fa-envelope"></i></a>
      </div>
      <div class="header-links">
        <a class="link" href="#about" data-scroll>Over mij</a>
        <a class="link" href="#projects" data-scroll>Projecten</a>
      </div>
    </div>
    <a class="down" href="#about" data-scroll><i class="icon fa fa-chevron-down" aria-hidden="true"></i></a>
  </div>

  <!-- About Section -->
  <section id="about">
    <!-- User Introduction-->
    <div class="user-details">
      <h1>Over mij</h1>
      <picture>
        <source type="image/webp" srcset="./assets/img/png/logo.png" alt="Professional Me" width="20%" style="border-radius: 50%" />
        <img src="./assets/img/png/logo.png" alt="Professional Me" width="20%" style="border-radius: 50%" />
      </picture>
      <p>
        Ik ben Corwin van Velthuizen, een programmeur en webdeveloper. Mijn vakgebied is programmeren en
        webdevelopment. Mijn interesse voor programmeren en webdevelopment is gebaseerd op mijn passie voor
        technologie. Ik maak verschillende websites en applicaties voor mensen en bedrijven. Ook heb ik zelf
        een eigen bedrijf gecreëerd. CoreFire.nl is een hostingplatform voor websites en minecraft servers.
      </p>
    </div>
    <div class="user">
      <div class="tech">
        <h2>Talen</h2>
        <i class="devicon-javascript-plain colored"></i>
        <i class="devicon-php-plain colored"></i>
        <i class="devicon-java-plain-wordmark colored"></i>
        <i class="devicon-nodejs-plain colored"></i>
        <p>Mijn favoriete talen voor programmeren en het maken van applicaties.</p>
      </div>

      <div class="tech">
        <h2>Front-End</h2>
        <i class="devicon-express-original color"></i>
        <i class="devicon-bootstrap-plain-wordmark colored"></i>
        <i class="devicon-html5-plain-wordmark colored"></i>
        <i class="devicon-css3-plain-wordmark colored"></i>
        <p>De technologies die ik het liefst gebruik voor de Front-End. </p>
      </div>
      <div class="tech">
        <h2>Back-End</h2>
        <i class="devicon-nodejs-plain colored"></i>
        <i class="devicon-express-original-wordmark"></i>
        <i class="devicon-mongodb-plain-wordmark colored"></i>
        <i class="devicon-mysql-plain-wordmark color"></i>

        <p>De technologies die ik het liefst gebruik voor de backend en database. </p>
      </div>
      <div class="tech">
        <h2>Tools</h2>
        <i class="devicon-git-plain-wordmark colored"></i>
        <i class="devicon-visualstudio-plain colored"></i>
        <i class="devicon-github-plain-wordmark "></i>
        <i class="devicon-nginx-original"></i>
        <p>Mijn favoriete tools om versie's te beheren, code te bewerken en websites te hosten</p>
      </div>
    </div>
  </section>
  <section id="projects">
    <div class="user-details">
      <h1>Projecten</h1>
    </div>
    <div class="user-projects">
      <div class="images-right">
        <picture>
          <source type="image/webp" srcset="./assets/img/png/corefire.nl.png" alt="Personal Website" />
          <img alt="Personal Website" src="./assets/img/jpg/Personal-Resume-Website.jpg" />
        </picture>
      </div>
      <div class="contents" style="text-align: center">
        <h3>CoreFire Website</h3>
        <div>
          <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/php.svg" style="filter: invert(73%) sepia(74%) saturate(1552%) hue-rotate(169deg) brightness(109%) contrast(97%)" />
          &nbsp;
          <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/bootstrap.svg" style="filter: invert(24%) sepia(14%) saturate(2270%) hue-rotate(222deg) brightness(102%) contrast(90%)" />
          &nbsp;
          <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/github.svg" />
        </div>
        <p style="text-align: justify">
          Ik heb een Website gemaakt voor mijn bedrijf CoreFire, deze is gemaakt met PHP & MySQL. De website is
          opgebouwd op de basis van de Bootstrap framework, en gebruikt de WHMCS backend om de website te kunnen
          beheren.
        </p>
        <a class="project-link" target="_blank" href="https://corefire.nl/">Bekijk het!!</a>
      </div>
    </div>

    <div class="user-projects">
      <div class="images-left">
        <picture>
          <img alt="Discord bot" src="https://user-images.githubusercontent.com/88144943/167872917-f74615a8-0d28-48ab-88d9-6172e9f7270e.png" />
        </picture>
      </div>
      <div class="contents-right" style="text-align: center">
        <h3>Discord bot</h3>
        <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/javascript.svg" style="filter: invert(73%) sepia(74%) saturate(1552%) hue-rotate(169deg) brightness(109%) contrast(97%)" />
        &nbsp;
        <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/nodejs.svg" style="filter: invert(33%) sepia(29%) saturate(3844%) hue-rotate(184deg) brightness(90%) contrast(84%)" />
        &nbsp;
        <img height="32" width="32" src="https://unpkg.com/simple-icons@3.4.0/icons/github.svg" />
        <p style="text-align: justify">
          Ik heb een Discord bot gemaakt die de Discord server kan beheren. Deze bot is gemaakt in JavaScript met de
          Discord.js framework. Deze bot heeft meer dan 100 functies. U kunt deze bot gebruiken om de server te
          beheren, games te spelen, etc.
        </p>
        <a class="project-link" target="_blank" href="https://github.com/CorwinDev/Discord-Bot">Bekijk het!</a>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="user-details">
      <h1>Contact</h1>
    </div>
    <div class="user-projects">
      <div class="images-right">
        <picture style="background-color: transparent" class="imgge">
          <source style="background-color: transparent" type="image/webp" srcset="./assets/img/png/form.png" alt="form" />
          <img style="background-color: transparent" alt="form" src="./assets/img/png/form.png" />
        </picture>
      </div>
      <div class="contents" style="text-align: center">
        <form action="" method="post">
          <ul class="form-style-1">
            <li><label>Naam: <span class="required">*</span><input type="text" name="name" class="field-long" placeholder="Last" /></li>
            <li>
              <label>Email <span class="required">*</span></label>
              <input type="email" name="email" class="field-long" />
            </li>
            <li>
              <label>Onderwerp</label>
              <select name="onderwerp" class="field-select">
                <option value="website">Website</option>
                <option value="General Question">General</option>
              </select>
            </li>
            <li>
              <label>Uw bericht <span class="required">*</span></label>
              <textarea name="message" id="field5" class="field-long field-textarea"></textarea>
            </li>
            <li>
              <input type="submit" value="Verstuur" class="project-link" />
            </li>
          </ul>
        </form>
      </div>
    </div>
  </section>
  <footer class="footer">
    <p>&copy; Corwin van Velthuizen 2020 - <?= date("o") ?></p>
    <p>The only way to learn a new programming language is by writing programs in it.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="./assets/js/sweet-scroll.min.js"></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>