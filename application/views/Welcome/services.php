<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name="keywords" content="Pedestana">
    <meta name="author" content="Yudha">
    <title>Pedestana | Services</title>
     <link href="<?php echo base_url('assets/welcome/style.css')?>" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Pedestana</span> </h1>
        </div>
        <nav>
          <ul>
           <li class="Nav"><a href="<?php echo base_url('Welcome/index'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('Welcome/about'); ?>">About</a></li>
            <li><a href="<?php echo base_url('Welcome/services'); ?>">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Services</h1>
          <ul id="services">
            <li>
              <h3>Website Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $1,000 - $3,000</p>
            </li>
            <li>
              <h3>Website Maintenance</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $250 per month</p>
            </li>
            <li>
              <h3>Website Hosting</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
						  <p>Pricing: $25 per month</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Get A Quote</h3>
            <form class="quote">
  						<div>
  							<label>Name</label><br>
  							<input type="text" placeholder="Name">
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Emial Address">
  						</div>
  						<div>
  							<label>Message</label><br>
  							<textarea placeholder="Message"></textarea>
  						</div>
  						<button class="button_1" type="submit">Send</button>
					</form>
          </div>
        </aside>
      </div>
    </section>

     <footer>
      <p>Informatics UII, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>