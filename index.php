<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Anki — Portfolio</title>
  <meta name="description" content="Ankith H S — portfolio, web developer, projects and contact.">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;900&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <header class="topbar">
    <div class="wrap">
      <a class="brand" href="#">ANKI<span class="brand-muted">.dev</span></a>

      <nav class="nav" id="nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#certificates">Certificates</a>
        <a href="#contact">Contact</a>
      </nav>

      <button id="menuBtn" class="menu-btn" aria-label="Open menu" aria-expanded="false">☰</button>
    </div>
  </header>

  <main>

    <section class="hero" id="home">
      <div class="wrap hero-grid">
        <div class="hero-left">
          <p class="eyebrow">WEB DEVELOPER</p>
          <h1 class="hero-title">Hello, I'm ANKITH</h1>
          <p class="subtitle">// CODE-CRAFTER</p>

          <div class="cta-row">
            <a class="btn btn-outline" href="assets/anki-cv.pdf" download>Download CV</a>
          </div>
        </div>

        <div class="hero-right">
          <div class="profile-wrap">
            <img src="assets/images/hero.jpg" alt="Ankith H S — profile photo" class="profile-img" />
          </div>
        </div>
      </div>
    </section>

    <div class="wrap center-icon">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 2v20"></path>
        <path d="M2 12h20"></path>
      </svg>
    </div>

    <section id="about" class="section wrap about-section">
      <div class="about-grid">
        <div class="about-left">
          <h2>About</h2>
          <p class="intro">I'm <strong class="intro-name">Ankith H S</strong>, a Computer Science student at <span class="muted">Malnad College of Engineering, Hassan</span>. My passion is occasional coding, developing websites and turning ideas into clean, usable interfaces.</p>
          <blockquote class="intro-quote">“DESIGN IS INTELLIGENCE MADE VISIBLE. CODE BRINGS IT TO LIFE.”</blockquote>
          <p class="more">I focus on learning practical web development, data structures, and building projects that I can show and iterate on. I'm open to internships, small collaborations and fun technical challenges.</p>
        </div>
      </div>
    </section>

    <section id="skills" class="section wrap skills-section">
      <h2>Skills</h2>
      <p class="skills-intro">Technologies and tools I use frequently. Focused on building reliable, production-ready code and data visualizations.</p>
      <div class="skills-grid">
        <div class="skill-chip">Python</div>
        <div class="skill-chip">Java</div>
        <div class="skill-chip">C</div>
        <div class="skill-chip">MySQL</div>
        <div class="skill-chip">Power BI</div>
        <div class="skill-chip">Data Visualization (Python)</div>
        <div class="skill-chip">HTML</div>
        <div class="skill-chip">CSS</div>
        <div class="skill-chip">JavaScript</div>
      </div>
    </section>

    <section id="projects" class="section wrap projects-section">
      <div id="projects-list" class="projects-list"></div>

      <h2>Projects</h2>
      <div class="projects-grid">
        <article class="project-card">
          <div class="project-body">
            <h3 class="project-title">Portfolio Website</h3>
            <p class="project-desc">A responsive single-page portfolio built with HTML, CSS and vanilla JavaScript. Previously used PHP backend for contact form.</p>
          </div>
        </article>
      </div>
    </section>

    <section id="certificates" class="section wrap certificates-section">
      <h2>Certificates</h2>

      <div class="certificates-grid">
        <article class="certificate-card">
          <div class="certificate-body">
            <h3 class="certificate-title">Ethical Hacking Certificate</h3>
            <a href="assets/Certificates/ethical.pdf" target="_blank" rel="noopener" class="cert-btn">View Certificate</a>
          </div>
        </article>

        <article class="certificate-card">
          <div class="certificate-body">
            <h3 class="certificate-title">Data Mining Certificate</h3>
            <a href="assets/Certificates/data-mining.pdf" target="_blank" rel="noopener" class="cert-btn">View Certificate</a>
          </div>
        </article>
      </div>
    </section>

    <section id="contact" class="section wrap contact-section">
      <h2>Contact</h2>

      <div class="contact-grid-new">
        <div class="contact-card-big">
          <h3>Get in Touch</h3>
          <p class="contact-line"><strong>Name:</strong> Ankith H S</p>
          <p class="contact-line"><strong>Email:</strong> <a href="mailto:thisisankith@gmail.com">thisisankith@gmail.com</a></p>
          <p class="contact-line"><strong>Phone:</strong> <a href="tel:+919480156569">+91-94801-56569</a></p>
          <div class="card-ctas">
            <a class="btn btn-solid small" href="mailto:thisisankith@gmail.com">Email Me</a>
            <a class="btn btn-outline small" href="assets/anki-cv.pdf" download>Download CV</a>
          </div>
        </div>

        <!-- NEW FORM (Formspree) -->
        <form class="contact-form-new" method="POST" action="https://formspree.io/f/YOUR_FORM_ID" novalidate>
          <label for="name">Your Name</label>
          <input id="name" type="text" name="name" required>

          <label for="email">Your Email</label>
          <input id="email" type="email" name="email" required>

          <label for="message">Your Message</label>
          <textarea id="message" name="message" rows="6" required></textarea>

          <div style="display:none !important;">
            <label for="hp">Leave this field empty</label>
            <input id="hp" name="hp" type="text" autocomplete="off">
          </div>

          <button type="submit" class="btn btn-solid">Send Message</button>
        </form>
      </div>
    </section>

  </main>

  <footer class="footer">
    <p>© <span id="year"></span> Anki — Built with sweat & code.</p>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>

