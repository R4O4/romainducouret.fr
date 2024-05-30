<!-- Genere la base du fichier -->
<!DOCTYPE html>
<html>

<head>
  <title>Romain Ducouret</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="view\src\css\style.css">
  <link rel="icon" type="image/png" href="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <header>
    <p class="icon">RD::</p>
    <button class="menuBtn"><img src="view\src\img\menu.svg" alt="menu icon"></button>
    <nav>
      <a href="#portfolio">Portfolio</a>
      <a href="#projects">Projets</a>
      <a href="#about">A propos</a>
      <a href="#contact" class="primaryButton">Contactez-moi <img src="view\src\img\arrow-right.svg" alt="arrow down icon"></a>
    </nav>
  </header>

  <section class="hero" id="portfolio">
    <img src="view\src\img\portrait.png" alt="" class="me">
    <div class="heroText">
      <h1>Je suis Romain, <br /><span>Développeur Web</span></h1>
      <p>Passionné de nouvelles technologie et de conception de solutions numérique sur-mesure.</p>
      <a href="#projects" class="primaryButton">Découvrir mon travail <img src="view\src\img\arrow-down.svg" alt="arrow down icon"></a>
    </div>
  </section>

  <section class="projects" id="projects">
    <h2>Jetez un œil à mes <span>derniers projets</span></h2>
    <p>Découvrez quelques uns de mes projets en cours</p>
    <div class="projects-container">
      <div class="project">
        <img src="view\src\img\stockflow.jpg" alt="ZenithOS">
        <div class="project-texts">
          <h3>ZenithOS</h3>
          <p>ZenithOS est un projet ayant pour but de reproduire les fonctionnalités de base d’un système d’exploitation dans une interface web.</p>
          <a href="" class="secondaryButton">Découvrir <img src="view\src\img\arrow-up-right.svg" alt="arrow up right ico"></a>
        </div>
      </div>
      <div class="project">
        <img src="view\src\img\stockflow.jpg" alt="ZenithOS">
        <div class="project-texts">
          <h3>StockFlow</h3>
          <p>StockFlow est un outil de gestion des ressources alimentaires pour les particuliers. Où il est possible de référencer les différents ingrédients et leurs propriétés ( DLC, Date d’entrée...)</p>
          <a href="" class="secondaryButton">Découvrir <img src="view\src\img\arrow-up-right.svg" alt="arrow up right ico"></a>
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <section class="soft-skills">
      <h2>Soft-skills</h2>
      <p>Minutieux</p>
      <p>Curieux</p>
      <p>Esprit d'analyse</p>
      <p>Organisé</p>
    </section>
    <section class="hard-skills">
      <h2>Hard-skills</h2>
      <div class="progress-bar-container">
        <div class="progress-bar">
          <p>HTML <br>CSS <br>JS</p>
          <progress value="95" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\database-solid.svg" alt="SQL icon">
          <progress value="70" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\react.svg" alt="React icon">
          <progress value="50" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\typescript.svg" alt="Typescript icon">
          <progress value="50" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\php.svg" alt="Php icon">
          <progress value="95" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\sass.svg" alt="Sass icon">
          <progress value="95" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\c.svg" alt="C# icon">
          <progress value="25" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\figma.svg" alt="Figma icon">
          <progress value="30" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\windows.svg" alt="Windows icon">
          <progress value="95" max="100"></progress>
        </div>
        <div class="progress-bar">
          <img src="view\src\img\linux.svg" alt="Linux icon">
          <progress value="95" max="100"></progress>
        </div>
      </div>
    </section>
  </section>

  <script src="view\src\js\openMenu.js"></script>
</body>

</html>