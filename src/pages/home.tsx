import Button from "../components/Button";
import Project from "../components/Project";

export function Home() {
  return (
    <>
      <header>
        <span id="orangeCircle"></span>
        <span id="blueCircle"></span>
        <div id="statusContainer">
          <span id="status"></span>
          <p>ouvert aux nouveaux projets</p>
        </div>
        <h1>Votre marque manque-t-elle d'étincelle ?</h1>
        <p>Je conçois des marques et des site web uniques en tant que concepteur créatif et développeur. Mon objectif est de faire ressortir votre marque et votre présence en ligne de manière unique.</p>
        <img src="/noise.png" alt="" />
        <div id="backgroundColor"></div>
      </header>

      <section className="about">
        <h2>Créons ensemble quelque chose d'époustouflant</h2>

        <div className="about-card-container">
          <div className="about-card">
            <img src="/brand_icon.svg" alt="brand icon" />
            <h3>Identité de marque</h3>
            <p>Votre marque au top de sa forme et identifiable. Une encyclopédie complète de votre marque présentée dans une représentation visuelle. C'est l'objectif.</p>
          </div>
          <div className="about-card">
            <img src="/devlopement_icon.svg" alt="brand icon" />
            <h3>Développement web</h3>
            <p>Un site Web qui vous aide à attirer des visiteurs, qui représente parfaitement la vision de votre entreprise et dont vous êtes fier. Un focus sur un affichage dynamique que vous souhaitez continuer à regarder pendant des heures interminables.</p>
          </div>
          <img src="/portrait.svg" alt="Portrait" className="portrait" />
        </div>
      </section>

      <section className="projects">
        <h2>Projets que j'ai réalisés. En un rien de temps.</h2>
        <h3>Une sélection de projets sur lesquels j'ai travaillé ces derniers mois. Bien sûr, tout ne s'arrête pas là. Il y en aura bien d'autres à venir bientôt.</h3>
        <Button name="Parlons-en" backgroundColor="#141414" textColor="#FFFFFF" to="/letstalk"></Button>
      
        <div className="projects-container">
          <div className="project-cards">
            <Project title="Outils de gestion alimentaire" icon="web" date="2024" backgroundImage="./project_1.jpg"></Project>
            <Project title="Outils de gestion alimentaire" icon="brand" date="2024" backgroundImage="./project_1.jpg"></Project>
            <Project title="Outils de gestion alimentaire" icon="brand" date="2024" backgroundImage="./project_1.jpg"></Project>
          </div>
        </div>
      </section>

      <section className="about-me">
        <h2>A propos de moi</h2>
        <p>Je suis Romain, un développeur web passionné par l'apprentissage de nouvelles technologies. Toujours à l'affût des dernières innovations, j'enrichis continuellement mes compétences en explorant des nouvelles solutions. Mon enthousiasme pour le développement web se reflète dans mes projets. J'aime partager mes connaissances et collaborer avec des équipes pour créer des solutions innovantes. Mon désir d'apprentissage et de me perfectionner font de moi un atout précieux pour toute entreprise.</p>
      </section>
    </>

  )
}