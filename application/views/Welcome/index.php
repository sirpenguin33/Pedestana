<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Portal Desa Tangguh Bencana">
    <meta name="keywords" content="Pedestana">
    <meta name="author" content="Yudha">
    <title>Pedestana | Welcome</title>
     <link href="<?php echo base_url('assets/welcome/style.css')?>" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Welcome To <span class="highlight">Pedestana</span></h1>
        </div>
        <nav>
          <ul>
            <li class="Nav"><a href="<?php echo base_url('Welcome'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('Welcome/about'); ?>">About</a></li>
            <li><a href="<?php echo base_url('Welcome/services'); ?>">Courses</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Portal Desa Tangguh Bencana</h1>
        <p></p>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1>Web Developer Team: RADIUM</h1>
        <form>
          <a href="<?php echo base_url('Login'); ?>"><button type="button" class="button_1">Login as BNPB</button></a>
          <a href="<?php echo base_url('Login'); ?>"><button type="button" class="button_1">Login as Fasilitator</button></a>
          <a href="<?php echo base_url('Pengunjung'); ?>"><button type="button" class="button_1">Look Village's</button></a>
        </form>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="assets/img/l2.png">
          <h3>Codeigniter</h3>
          <p>Codeigniter merupakan sebuah framework 
          	<br>PHP yang menggunakan pola desain (design pattern) 
          	<br>MVC (Model View Controller)</div>
        <div class="box">
          <img src="assets/img/lg.png">
          <h3>HTML & JS &CSS</h3>
          <p>Komponen web PEDESTANA</div>
        <div class="box">
          <img src="assets/img/l3.png">
          <h3>Ubuntu</h3>
          <p>adalah ubuntu yang didesain untuk di install di server.</div>
      </div>
    </section>

    <footer>
      <p>Informatics UII, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>