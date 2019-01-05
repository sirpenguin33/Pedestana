<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name="keywords" content="Pedestana">
    <meta name="author" content="Yudha">
    <title>Informatics | Courses</title>
     <link href="<?php echo base_url('assets/welcome/style.css')?>" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Informatics</span> | Courses</h1>
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

    <section id="newsletter">
      <div class="container">
        <h1>We saw, We Came, We learned!</h1>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Courses</h1>
          <ul id="services">
            <li>
              <h3>Pengembangan Aplikasi Berbasis Web</h3>
              <p>Dalam Matakuliah ini kami belajar bagaimana cara membuat Applikasi yang berbasis web</p>
						
            </li>
            <li>
              <h3>Sistem Jaringan Komputer</h3>
              <p>Matakuliah ini mengajarkan kami bagaimana komputer dapat saling berbagi resource melalui jaringan (Network)</p>
            </li>
          </ul>
        </article>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="<?php echo base_url('assets/img/hr.jpeg')?>">
          <h3>Mr.Hari Setiaji</h3>
          <p>Dosen PABW</div>
        <div class="box">
          <img src="<?php echo base_url('assets/img/idr.jpeg')?>">
          <h3>Mr.Moh Idris</h3>
          <p>Dosen SJK</div>
    </section>
     <footer>
      <p>Informatics UII, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>