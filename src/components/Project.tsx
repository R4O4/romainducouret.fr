import { useEffect } from "react";

type icon = "brand" | "web";

type ProjectProps = {
  title: string;
  icon: icon;
  date: string;
  backgroundImage: string;
};

export default function Project({ title, icon, date, backgroundImage }: ProjectProps) {
  function type() {
    switch (icon) {
      case "brand":
        return (
          <div className="project-card-title">
            <img src="/brand_icon.svg" alt="brand icon" />
            <p>Identité de marque</p>
          </div>
        );
      case "web":
        return (
          <div className="project-card-title">
            <img src="/devlopement_icon.svg" alt="web development icon" />
            <p>Développement web</p>
          </div>
        );
      default:
        return null;
    }
  }

  return (
    <div className="project-card" style={{ background: `url(${backgroundImage})` }}>
      {type()}
      <p className="project-card-date">{date}</p>
      <h3>{title}</h3>
    </div>
  );
}
