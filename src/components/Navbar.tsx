import { Link } from 'react-router-dom';

export function Navbar() {
  return (
    <nav style={{display: "none"}}>
      <Link to="/">Home</Link>
      <Link to="/page1">Page 1</Link>
      <Link to="/page2">Page 2</Link>
    </nav>
  )
}