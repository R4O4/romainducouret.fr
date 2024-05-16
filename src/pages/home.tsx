export function Home() {
  return (
    <>
      <title>Romain Ducouret</title>
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
      </section>
    </>
      
  )
}