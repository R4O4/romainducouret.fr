type BackgroundColorOption = "#FFFFFF" | "#141414";
type TextColorOption = "#FFFFFF" | "#323232";

type ButtonProps = {
  backgroundColor: BackgroundColorOption;
  to: string;
  name: string;
  textColor: TextColorOption;
};



export default function Button({ backgroundColor, to, name, textColor }: ButtonProps) {
  function buttonImg() {
    if (backgroundColor === "#FFFFFF") {
      return { filter: "invert(1)" }
    }
  }
  return (
    <>
      <a href={to} className="primaryBtn" style={{ height: 60, display: "flex", flexDirection: "row", textDecoration: "none", marginTop: 40 }}>
        <p style={{ color: textColor, background: backgroundColor, borderRadius: 60, width: 180, height: 60, display: "flex", margin: "0", textAlign: "center", alignItems: "center", justifyContent: "center" }}>{name}</p>

        <div style={{ background: backgroundColor, borderRadius: "50%", padding: 22 }}>
          <img src="./leftArrow.svg" alt="Left arrow" className="ButtonImg" style={buttonImg()}/>
        </div>
      </a>
    </>
  )
}