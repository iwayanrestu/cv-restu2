<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
  <title>Portfolio</title>
</head>

<body>
  <header class="header">
    <a href="index.html" class="logo">iwrmt</a>
    <input type="checkbox" id="check" />
    <nav class="navbar">
      <a href="index.php" class="active">Home</a>
      <a href="projects.html">Projects</a>
      <a href="education.html">Education</a>
      <a href="catalog.php">Catalog</a>
      <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
    </nav>
    <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>

    <a href="#contact" class="contact">Contact Me</a>
  </header>

  <section class="home" id="home">
    <div class="home-content">
      <div class="home-text">
        <h3>Hi</h3>
        <h1>I'm <span>Restu</span></h1>
        <h1>a Data Scientist</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
          ullam dolore animi ab veritatis veniam aliquam deserunt odio
          laboriosam vel, nulla, sequi cum asperiores similique, quasi
          cupiditate obcaecati at accusantium!
        </p>
        <div class="btn-box">
          <button class="btn-1">Hire Me</button>
          <button class="btn-2">Experience</button>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="fotoganteng.jpg" alt="" />
    </div>
  </section>
  <section class="about" id="about">
    <div class="about-content">
      <h2 class="heading">About <span>Me</span></h2>
      <h3>Data <span>Scientist</span></h3>
      <p>
        I am an undergraduate student majoring in Information Systems with a
        strong passion for technology. My enthusiasm for the tech field drives
        me to continuously expand my knowledge and skills.
      </p>
      <a href="#" class="btn-2">Experience</a>
    </div>
  </section>
  <section class="contact-form" id="contact">
    <h2 class="contact-me">Contact <span>Me</span></h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Full Name" />
        <input type="email" placeholder="Email" />
      </div>
      <div class="input-box">
        <input type="number" placeholder="Phone Number" />
        <input type="text" placeholder="Subject" />
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
      </div>
      <input type="submit" value="Send Message" class="btn-1" />
    </form>
  </section>
  <footer class="footer">
    <div class="social">
      <a href="https://www.linkedin.com/in/i-wayan-restu"><i class="bx bxl-linkedin-square"></i></a>
      <a href="https://www.instagram.com/iwrmt/"><i class="bx bxl-instagram"></i></a>
    </div>
    <ul class="list">
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Projects</a>
      </li>
      <li>
        <a href="#">Education</a>
      </li>
    </ul>
    <p class="copyrights">© 2024 Restu | All Rights Reserved</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>