<!DOCTYPE html>
<html>

<head>
  <title>Romain Ducouret</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="view/src/css/style.css">
  <link rel="icon" type="image/png" href="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body id="portfolio">
  <header>
    <p class="icon">RD::</p>
    <button class="menuBtn"><img src="view/src/img/menu.svg" alt="menu icon"></button>
    <nav>
      <a href="#portfolio">Portfolio</a>
      <a href="#projects">Projets</a>
      <a href="#about">À propos</a>
      <a href="#contact" class="primaryButton">Contact <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg></a>
    </nav>
  </header>

  <span></span>
  <section class="hero">
    <img src="view/src/img/portrait.png" alt="" class="me">
    <div class="heroText">
      <h1>Je suis Romain, <br /><span>Développeur Web</span></h1>
      <p>Passionné par les nouvelles technologies et la conception de solutions numériques sur-mesure.</p>
      <a href="#projects" class="primaryButton">Découvrir mon travail <img src="view/src/img/arrow-down.svg" alt="arrow down icon"></a>
    </div>
  </section>

  <span id="projects"></span>
  <section class="projects">
    <h2>Jetez un œil à mes <span>derniers projets</span></h2>
    <p>Découvrez quelques-uns de mes projets en cours</p>
    <div class="projects-container">
      <div class="project">
        <img src="view/src/img/zenithos.jpg" alt="ZenithOS" class="project-img">
        <div class="project-texts">
          <h3>ZenithOS</h3>
          <p>ZenithOS est un projet ayant pour but de reproduire les fonctionnalités de base d’un système d’exploitation dans une interface web.</p>
          <a href="https://github.com/R4O4/ZenithOS" target="_blank" class="secondaryButton">Découvrir <img src="view/src/img/arrow-up-right.svg" alt="arrow up right icon"></a>
        </div>
      </div>
      <div class="project">
        <img src="view/src/img/stockflow.jpg" alt="StockFlow" class="project-img">
        <div class="project-texts">
          <h3>StockFlow</h3>
          <p>StockFlow est un outil de gestion des ressources alimentaires pour les particuliers, permettant de référencer les différents ingrédients et leurs propriétés (DLC, date d’entrée, etc.).</p>
          <a href="https://github.com/R4O4/StockFlow" target="_blank" class="secondaryButton">Découvrir <img src="view/src/img/arrow-up-right.svg" alt="arrow up right icon"></a>
        </div>
      </div>
    </div>
  </section>

  <span id="about"></span>
  <section class="about">
    <div class="about-title">
      <h2>Créons ensemble quelque chose <span>d'époustouflant</span></h2>
      <p>Voici quelques informations intéressantes</p>
    </div>
    <div class="about-container">
      <section class="soft-skills">
        <h3>Soft skills</h3>
        <p>Minutieux</p>
        <p>Curieux</p>
        <p>Esprit d'analyse</p>
        <p>Organisé</p>
      </section>
      <section class="hard-skills">
        <h3>Hard skills</h3>
        <div class="progress-bar-container">
          <div class="progress-bar">
            <p>HTML <br>CSS <br>JS</p>
            <progress value="95" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/database-solid.svg" alt="SQL icon">
            <progress value="70" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/react.svg" alt="React icon">
            <progress value="50" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/typescript.svg" alt="TypeScript icon">
            <progress value="50" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/php.svg" alt="PHP icon">
            <progress value="95" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/sass.svg" alt="Sass icon">
            <progress value="95" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/c.svg" alt="C# icon">
            <progress value="25" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/figma.svg" alt="Figma icon">
            <progress value="30" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/windows.svg" alt="Windows icon">
            <progress value="95" max="100"></progress>
          </div>
          <div class="progress-bar">
            <img src="view/src/img/linux.svg" alt="Linux icon">
            <progress value="95" max="100"></progress>
          </div>
        </div>
      </section>
      <section class="socials" id="contact">
        <div class="socials-container">
          <a href="https://www.linkedin.com/in/romain-ducouret-153792207/"><img src="view/src/img/linkedin.svg" alt="LinkedIn icon"></a>
          <a href="https://github.com/R4O4"><img src="view/src/img/github.svg" alt="GitHub icon"></a>
        </div>
      </section>
    </div>

  </section>

  <script src="view/src/js/openMenu.js"></script>
</body>

</html>